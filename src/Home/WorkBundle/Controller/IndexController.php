<?php

namespace Home\WorkBundle\Controller;

use Home\WorkBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
////        Setting data to db
//        $new = new News();
//        $new->setTitle('If you\'re following along with this example, you\'ll need to create a route that points to this action to see it work.');
//        $new->setText('This article shows working with Doctrine from within a controller by using the getDoctrine() method of the controller. This method is a shortcut to get the doctrine service. You can work with Doctrine anywhere else by injecting that service in the service. See Service Container for more on creating your own services.');
//        $new->setAuthor('Green');
//        $new->setCreateDate(new \DateTime());
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($new);
//        $em->flush();

        $repository = $this->getDoctrine()->getRepository('HomeWorkBundle:News');
        $news = $repository->findAll();

        return $this->render('HomeWorkBundle:Index:index.html.twig', array(
            'news' => $news
        ));
    }

    public function twigAction()
    {
        $bool = true;
        $count = 20;
        $str = 'Data for twig testing';

        return $this->render('HomeWorkBundle:Index:twig.html.twig', array(
            'bool' => $bool,
            'count' => $count,
            'string' => $str
        ));
    }

    public function twig2Action()
    {
        return $this->render('HomeWorkBundle:Index:twig2.html.twig', array(
            'text' => 'Some text for tests',
            'number' => -123
        ));
    }
}
