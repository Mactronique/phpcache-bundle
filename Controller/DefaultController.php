<?php

namespace Mactronique\Bundle\PhpCacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mactronique\PhpCache\Driver\XcacheDriver;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $cache = $this->get("mactronique_cache.phpcache");
        $cache->set('my', $name, null, XcacheDriver::NAME);
        $val = $cache->get('my', XcacheDriver::NAME);
        return $this->render('MactroniquePhpCacheBundle:Default:index.html.twig', array('name' => $val));
    }

    public function showAction()
    {
        $cache = $this->get("mactronique_cache.phpcache");
        if ($cache->exists('my')) {
            $val = $cache->get('my', XcacheDriver::NAME);
        } else {
            $val = "No name !";
        }
        return $this->render('MactroniquePhpCacheBundle:Default:index.html.twig', array('name' => $val." (from cache)"));
    }
}
