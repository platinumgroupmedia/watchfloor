<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Users;

class SalesController extends Controller
{
    /**
     * @Route("/sales/{page}", name="sales")
     */
    public function indexAction(Request $request, $page=1)
    {
	    #SELECT STR_TO_DATE('October 23, 2013, 7:47 pm', '%M %e, %Y, %l:%i %p');
	    $buttons = array();
	    
	    $pastdate = date('Y-m-d', strtotime("-7 day", time()));
	    
	    $em = $this->getDoctrine()->getManager();
	    
	    $dql = "SELECT u, s.amount, s.address1, s.city, s.state, s.postal, s.country, s.phone FROM AppBundle:Users u INNER JOIN AppBundle:Sales s HAVING s.orderId = u.orderNumber WHERE u.created > :date AND (s.productId = 15523 OR s.productId = 15524) ORDER BY u.created DESC";
	    $query = $em->createQuery($dql)
	   		->setParameters( array(
				'date' => $pastdate
			));
	    
	    $paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($query, $page, 10, array('distinct' => true));
		
		$pagination->setPageRange(8);
	    
        // replace this example code with whatever you need
        return $this->render('sales/index.html.twig', [
            'buttons' => $buttons,
            'pagination' => $pagination,
        ]);
    }
}
