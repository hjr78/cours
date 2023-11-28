<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

public const BASE_PATH = 'images/article';
public const UPLOAD_DIR = 'public/images/article';

    public function configureFields(string $pageName): iterable
    {
        return [
                TextField::new('titre'),
                TextField::new('resume'),
                TextEditorField::new('contenu'),
                AssociationField::new('auteur'),
                DateTimeField::new('createdAt')->setFormat('yyyyy.MMMM.dd G hh:mm aaa'),
                ImageField::new('image')
                ->setBasePath(self::BASE_PATH)
                ->setUploadDir(self::UPLOAD_DIR)
                ];

    }
   
}
