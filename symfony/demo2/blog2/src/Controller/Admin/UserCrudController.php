<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstname'),
            TextField::new('lastname'),
            TextField::new('email'),
            TextField::new('password'),
            TextField::new('tel'),
            ArrayField::new('roles'),

        ];
    }

    private UserPasswordHasherInterface $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }


    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $password = $this->hasher->hashPassword($entityInstance, 'pass_1234');
        $entityInstance->setPassword($password);
        $entityManager->persist($entityInstance);
        $entityManager->flush();
    }
    
}
