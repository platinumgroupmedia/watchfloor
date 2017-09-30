<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Users;
use AppBundle\Entity\WatchfloorTracking;

class AdminController extends Controller
{
    /**
     * @Route("/admin/{page}", name="admin", requirements={"page": "\d+"})
     */
    public function indexAction(Request $request, $page=1)
    {
	    #SELECT STR_TO_DATE('October 23, 2013, 7:47 pm', '%M %e, %Y, %l:%i %p');
    
	    $pastdate = date('Y-m-d', strtotime("-7 day", time()));
	    
	    $em = $this->getDoctrine()->getManager();
	    
	    $dql = "SELECT u, s.amount, s.address1, s.city, s.state, s.postal, s.country, s.phone FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.created > :date AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) ORDER BY u.created DESC";
	    $query = $em->createQuery($dql)
	   		->setParameters( array(
				'date' => $pastdate
			));
	    
	    $paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($query, $page, 10, array('distinct' => true));
		
		$pagination->setPageRange(8);
	    
        return $this->render('admin/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
    
    /**
     * @Route("/admin/invoices/{page}", name="admin_invoices")
     */
     
    public function invoicesAction( Request $request, $page = 1 )
    {
	    $em = $this->getDoctrine()->getManager();
	    
	    $dql = 'SELECT w FROM AppBundle:WatchfloorTracking w ORDER BY w.id DESC';
	    $query = $em->createQuery( $dql )->getResult();
	    
	    $paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($query, $page, 20, array('distinct' => true));
	    
	    return $this->render('admin/invoices.html.twig', [
	        'pagination' => $pagination,
	        'page' => $page,
        ]);
    }
    
    
    /**
     * @Route("/admin/invoice/view/{id}/{page}", name="admin_view_invoice")
     */
    public function invoiceViewAction( Request $request, WatchfloorTracking $wft, $page = 1 )
    {
	    $em = $this->getDoctrine()->getManager();
	    
	    
	    $id = $wft->getId();
	    if( $id == 1)
	    {
		    $startId = '22093'; // This is the first id of users in 2017
		    $end = $em->getRepository( 'AppBundle:WatchfloorTracking' )->findOneById( $id );
		    $endId = $end->getLastId();
		    $startDate = new \DateTime('2017-01-01');
		    $endDate = $end->getCreated();
		    
	    } else {
		    $start = $em->getRepository( 'AppBundle:WatchfloorTracking' )->findOneById( $id -1 );
		    $end = $em->getRepository( 'AppBundle:WatchfloorTracking' )->findOneById( $id );
		    $startId = $start->getLastId();
		    $endId = $end->getLastId();
		    $startDate = $start->getCreated();
		    $endDate = $end->getCreated();
	    }
	    if( !$end->getViewed() )
	    {
		    $em->persist( $end );
		    $end->setViewed(1);
		    $em->flush();
	    }
	    
	    $dql = "SELECT u, s.amount, s.address1, s.city, s.state, s.postal, s.country, s.phone FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE (u.id >= :start AND u.id <= :end) AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
	    
	    $dql_count = "SELECT COUNT(u.id) total FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE (u.id >= :start AND u.id <= :end) AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
	    
	    $counts = $em->createQuery($dql_count)->setParameters( array('start' => $startId, 'end' => $endId ))->getResult();
	    
		$query = $em->createQuery($dql)->setHint('knp_paginator.count', sizeof($counts)); // setHint is part of the manual count for Knp Paginator
	    $query->setParameters( array(
				'start' => $startId,
				'end' => $endId,
		));
		
		
	    
	    $paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($query, $page, 10, array('distinct' => false));
		
		$pagination->setPageRange(8);
		
        return $this->render('admin/invoice.view.html.twig', [
	        'pagination' => $pagination,
	        'start' => $startDate,
	        'end' => $endDate,
	        'page' => $page,
        ]);
    }
    
    
    /**
     * @Route("/admin/invoice/{page}", name="admin_invoice")
     */
    public function invoiceAction( Request $request, $page = 1 )
    {
	    $date = '2017-01-01';
	    $em = $this->getDoctrine()->getManager();
	    
	    $dql = "SELECT u, s.amount, s.address1, s.city, s.state, s.postal, s.country, s.phone FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.created > :date AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
	    
	    $dql_count = "SELECT COUNT(u.id) total FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.created > :date AND (s.productId = 8978 OR s.productId = 15439 OR s.productId = 15433 OR s.productId = 15460 OR s.productId = 15517) GROUP BY u.infiniteUser ORDER BY u.created ASC";
	    
	    $counts = $em->createQuery($dql_count)->setParameters( array('date' => $date ))->getResult();
	    
		$query = $em->createQuery($dql)->setHint('knp_paginator.count', sizeof($counts)); // setHint is part of the manual count for Knp Paginator
	    $query->setParameters( array(
				'date' => $date
		));
		
		
	    
	    $paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($query, $page, 10, array('distinct' => false));
		
		$pagination->setPageRange(8);
		
        return $this->render('admin/invoice.html.twig', [
	        'pagination' => $pagination,
	        'ldate' => $date,
	        'page' => $page,
        ]);
    }
    
}
