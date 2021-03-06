@promotion
Feature: Prevent deletion of promotions applied to order
    In order to maintain proper order history
    As an Administrator
    I want to be prevented from deleting a promotion which has been applied to an order

    Background:
        Given the store operates on a single channel in "France"
        And the store ships everywhere for free
        And the store allows paying with "Cash on Delivery"
        And the store has a product "PHP Mug" priced at "€12.00"
        And there is a promotion "Christmas sale"
        And it gives "€3.00" fixed discount to every order
        And the customer "john.doe@gmail.com" placed an order "#00000022"
        And the customer chose "Free" shipping method to "France" with "Cash on Delivery" payment
        And the customer bought single "PHP Mug"

    @domain
    Scenario: Being unable to delete a promotion that was applied to an order
        When I try to delete promotion "Christmas sale"
        Then I should be notified that it is in use and cannot be deleted
        And promotion "Christmas sale" should still exist in the registry
