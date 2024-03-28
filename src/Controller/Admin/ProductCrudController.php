<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Produit')
            ->setEntityLabelInPlural('Produits');
    }

    public function configureFields(string $pageName): iterable
    {
        $required = true;

        if ($pageName == 'edit') {
            $required = false;
        }

        return [
            TextField::new('name')->setLabel('Nom')->setHelp('Le nom du produit.'),
            SlugField::new('slug')->setTargetFieldName('name')->setLabel('Slug')->setHelp('Le slug du produit.'),
            TextEditorField::new('description')->setLabel('Description')->setHelp('La description du produit.'),
            ImageField::new('illustration')
                ->setBasePath('/uploads/')
                ->setLabel('Illustration')
                ->setBasePath('/uploads')
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setHelp('L\'image du produit 600x600px.')
                ->setRequired($required),
            NumberField::new('price')->setLabel('Prix H.T')->setHelp('Le prix H.T du produit sans le sigle euro.'),
            ChoiceField::new('tva')->setLabel('TVA')->setChoices([
                '5,5%' => '5.5',
                '10%' => '10',
                '20%' => '20'
            ]),
            AssociationField::new('category')->setLabel('Catégorie associée'),
        ];
    }

}
