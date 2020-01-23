<?php namespace Test;
use Test\AcceptanceTester;

class ExampleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(200);
    }
}
