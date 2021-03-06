<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 29.10.2018
 * Time: 1:07
 */

namespace App\Service;


use App\Entity\Post;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class Posts
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var EntityRepository
     */
    private $repo;


    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $this->em->getRepository(Post::class);

    }

    /**
     * @return Post[]
     */
    public function getAll()
    {
        return $this->repo->findAll();
    }

    /**
     * @return Post
     */
    public function getById($id): ?Post
    {
        return$this->repo->find($id);
    }

}