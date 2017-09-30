<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Users;
use AppBundle\Entity\WatchfloorTracking;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
	    
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/checkinvoice", name="check_invoice")
     */
    public function checkInvoiceAction( Request $request )
    {
	    $em = $this->getDoctrine()->getManager();
	    $dql = 'SELECT MAX(w.lastId) last FROM AppBundle:WatchfloorTracking w';
	    
	    $wft = $em->createQuery($dql)->getResult();
	    
	    $max = $wft[0]['last'];
	    
	    $dql_count = "SELECT COUNT(u.id) total FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.id > :max AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
	    $count = $em->createQuery( $dql_count )->setParameters( array( 'max' => $max ) )->getResult();
	    
	    if( sizeof( $count ) > 199)
	    {
		    $message = \Swift_Message::newInstance()
		        ->setSubject('New Notification From Rich Janitor')
		        ->setFrom('notifications@richjanitor.com')
		        ->setTo('support@successmarketinginstitute.com')
		        #->setTo('wade@goodfellaz.com')
		        ->setBody(
		            $this->renderView(
		                // app/Resources/views/Emails/registration.html.twig
		                'Emails/notification.html.twig',
		                array()
		            ),
		            'text/html'
		        )
		    ;
		    
		    $this->get('mailer')->send($message);
		    
		    $dql = "SELECT u FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.id > :max AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
		    $users = $em->createQuery( $dql )->setParameters( array( 'max' => $max ) )->getResult();
		    
		    $maxid = null;
		    if(sizeof($users))
		    {
			    foreach( $users as $user )
			    {
				    if( $user->getId() > $maxid ) $maxid = $user->getId();
			    }
		    }
		    
		    if( $maxid )
		    {
			    $wft = new WatchfloorTracking();
			    $em->persist( $wft );
			    $wft->setLastId( $maxid );
			    $wft->setViewed( 0 );
			    $wft->setCreated( new \DateTime() );
			    $em->flush();
		    }
	    }
	    
	    return new Response( sizeof( $count ) . ' users' );
    }
}
