<?php

use PHPUnit\Framework\TestCase;
use MembershipClient\Model\Customer;
use MembershipClient\Model\CustomerFactory;

class CustomerFactoryTest extends TestCase
{
    public function setUp()
    {
        $this->SUT = new CustomerFactory();
    }

    public function testBuildReturnsCustomer()
    {
        $customer = [
            'id' => 1,
            'title' => 'mr',
            'firstName' => 'jay',
            'lastName' => 'Z',
            'emailAddress' => 'test@test.com',
            'phoneNumber' => 01234,
            'mobilePhone' => 01234
        ];
        $expected = new Customer(
            $customer['id'],
            $customer['title'],
            $customer['firstName'],
            $customer['lastName'],
            $customer['emailAddress'],
            $customer['phoneNumber'],
            $customer['mobilePhone']
        );

        $result = $this->SUT->build($customer);

        $this->assertEquals($expected, $result);
    }
}
