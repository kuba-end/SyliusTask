<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\RawMinkContext;
use PHPUnit\Framework\Assert as Assertions;

class FeatureContext extends RawMinkContext implements Context
{



    public function __construct()
    {
    }
    public function getPage()
    {
        return $this->getSession()->getPage();
    }

    /**
     * @When I go to the :linkName
     */
    public function iGoToThe($linkName)
    {
        $this->getPage()->clickLink($linkName);
    }

    /**
     * @When I click :linkText
     */
    public function iClick($linkText)
    {
        $button = $this->assertSession()
            ->elementExists('css', 'div.primary > span:nth-child(2)');

        $button->press();
    }

    /**
     * @When I fill in :code with :productDescription
     */
    public function iFillInWith($code, $productDescription)
    {

        $this->getSession()->getPage()->fillField($code, $productDescription."_test_".rand(0,10000));


    }



    /**
     * @When I fill the :arg1 with :arg2
     */
    public function iFillTheWith($arg1, $arg2)
    {

        $this->getPage()->find('css',
            'html body.pushable div.pusher div#wrapper.full.height div#content div.ui.segment
             form.ui.loadable.form.dirtylisten div.ui.stackable.grid.sylius-tabular-form div.thirteen.wide.column
              div div.ui.active.tab div.ui.attached.segment div.ui.styled.fluid.accordion div div.ui.content.active
               div.required.field input#sylius_product_translations_en_US_name')->setValue($arg2."_test_".rand(0,10000));
        $this->getSession()->wait(5000);
    }


    /**
     * @Then /^I should be notified that the product was created$/
     */
    public function iShouldBeNotifiedThatTheProductWasCreated()
    {
        $notify = $this->getPage()->find('css',
            'div.content:nth-child(3)')->getText();
        Assertions::assertEquals($notify,'Success Product has been successfully created.');


    }
    /**
     * @Given I am logged in as an administrator
     */
    public function iAmLoggedInAsAnAdministrator()
    {
        $this->visitPath('/admin/login');
        $this->getSession()->getPage()->fillField('Username','sylius');
        $this->getSession()->getPage()->fillField('Password','sylius');
        $button = $this->assertSession()
            ->elementExists('css', 'button.ui');

        $button->press();



    }
    /**
     * @Given I am on :path
     */
    public function iAmOn($path)
    {
        $currentUrl = $this->getSession()->getCurrentUrl();
        Assertions::assertEquals($path, $currentUrl);
    }


    /**
     * @Given the response status code should be :arg1
     */
    public function theResponseStatusCodeShouldBe($arg1)
    {
//        $actualStatusCode = $this->getSession()->getStatusCode();
//        dd($actualStatusCode);
//        Assertions::assertEquals($arg1,$actualStatusCode);
    }

    /**
     * @When I fill :dropDown with :color
     */
    public function iChooseColor($dropDown, $color)
    {
        $this->getSession()->getPage()->fillField($dropDown,$color);
    }

    /**
     * @When I press :arg1 button
     */
    public function iPressButton()
    {
        $button = $this->assertSession()
            ->elementExists('css', 'button.ui:nth-child(1)');

        $button->press();



    }
    /**
     * @When I select :arg1
     */
    public function iSelect($arg1)
    {
        $button = $this->assertSession()
            ->elementExists('css', '.grouped > div:nth-child(1) > div:nth-child(1) > label:nth-child(2)');

        $button->press();
    }








}
