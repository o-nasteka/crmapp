<?php

$I = new \AcceptanceTester\CRМOperatorSteps($scenario);
$I->wantТo('add two different customers to database');

$I->amInAddCustomerUi();
$first_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($first_customer);
$I->submitCustomerDataForm();
$I->seeIAminListCustomersUi();
$I->amlnAddCustomerUi();

$second_customer = $I->imagineCustomer();
$I->fillCustomerDataForm($second_customer);
$I->submitCustomerDataForm();
$I->seeIAmlnListCustomersUi();
$I = new \AcceptanceTester\CRМUserSteps($scenario);
$I->wantTq('query the customer info using his phone number');
$I->amlnQueryCustomerUi();
$I->flllinPhoneFieldWithDataFrom($first_customer);
$I->clickSearchButton();
$I->seeIAmlnlistCustomersUi();
$I->seeCustomerlnlist($first_customer);
$I->dontSeeCustomerlnlist($second_customer);