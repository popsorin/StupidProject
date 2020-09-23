<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Authors Sorin Pop
 * @ORM\Entity(repositoryClass=TutorsAndTrainingOrderRepository::class)
 * @ORM\Table(name="`tutors_and_training_order`")
 */
class TutorsAndTrainingOrder extends Order
{
    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $studentAge;

    /**
     * @ORM\Column(type="string", length=75, nullable=true)
     */
    private $classDuration;
}