# Sylius task by BitBagAcademy
### Task:
Exam task for Bitbag comapny.

## What for

Thanks to few adjustments you can now easily add some default colors to your products. Just go to create or edit product, add color and thats it. Now you can see default color at product page in your shop

## Usage

You need Product.php from src/Entity/Product to extend BaseProducts entity. Remember that it is mapped with xml, so use Product.orm.xml from src/Resources/config/doctrine or add your own annotations. 
Also you will need ProductTypeExtension.php file from src/Form/Extension.
Last step is change your views to be able to see drop down menu when you edit or create your products and to see color at shop page.
To do this you need put \n_details.html.twig  exactly into templates/bundles/SyliusAdminBundle/Product/Tab and \n_deatils.html.twig into templates/bundles/SyliusShopBundle/Product/Show/Tabs

To add more colors just edit const in Product entity.
