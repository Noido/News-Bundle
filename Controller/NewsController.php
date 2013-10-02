<?php

namespace R3c\Bundle\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use R3c\Bundle\NewsBundle\Entity\News;

/**
 * News controller
 */
class NewsController extends Controller
{
    /**
     * List of all news
     *
     * @Route("/news", name="news")
     */
    public function indexAction()
    {
        $news = $this->getDoctrine()->getEntityManager()
                     ->getRepository('R3cNewsBundle:News')->findAll();

        return $this->render('R3cNewsBundle:News:index.html.twig', array('news' => $news));
    }

    /**
     * Finds and displays a one news
     *
     * @Route("/news/{slug}", name="news_show")
     */
    public function showAction(News $oneNews)
    {
        return $this->render('R3cNewsBundle:News:show.html.twig', array('one_news' => $oneNews));
    }

    /**
     * List of last news
     *
     * @param integer $count
     * @return void
     */
    public function lastAction($count)
    {
        $news = $this->getDoctrine()->getEntityManager()
                     ->getRepository('R3cNewsBundle:News')->getLastNews($count);

        return $this->render('R3cNewsBundle:News:last.html.twig', array('news' => $news));
    }
    
}
