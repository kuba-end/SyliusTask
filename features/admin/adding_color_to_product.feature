@managing_colors
Feature: Adding colors
    In order to show product color on my shop page
    As an Administrator
    I want to be able to add colors to my products

    Background:
        Given I am logged in as an administrator
        And I am on "https://localhost:8001/admin/"
    @javascript
    Scenario: Adding color
        When I go to the "Products"
        And I click "Create"
        And I go to the "Simple product"
        And I fill in "Code" with "store_description"
        And I fill "Color" with "Zielony"
        And I fill "Price" with "20"
        And I fill the "Name" with "name_description"
        And I select "Channel"
        And I press "Create" button
        Then I should be notified that the product was created

