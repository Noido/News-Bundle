<?php

namespace R3c\Bundle\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * R3c\Bundle\NewsBundle\Entity\News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="R3c\Bundle\NewsBundle\Entity\NewsRepository")
 */
class News extends BaseNews
{
}