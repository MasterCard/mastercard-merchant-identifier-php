<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\MerchantIdentifier;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;



class MerchantIdentifierTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_merchant_identifier()
        {

            $map = new RequestMap();
            
            $map->set("MerchantId", "MICROSOFT");
            $map->set("Type", "FuzzyMatch");
            
            

            $response = MerchantIdentifier::query($map);

            $this->customAssertValue("7 merchants found.", $response->get("MerchantIds.Message"));
            $this->customAssertValue("ONE MICROSOFT WAY", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].Address.Line1"));
            $this->customAssertValue("REDMOND", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].Address.City"));
            $this->customAssertValue("98052", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].Address.PostalCode"));
            $this->customAssertValue("WA", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].Address.CountrySubdivision.Code"));
            $this->customAssertValue("8003865550", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].PhoneNumber"));
            $this->customAssertValue("4816 - COMPUTER NETWORK-INFORMATION SERVICES", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].MerchantCategory"));
            $this->customAssertValue("MICROSOFT", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].MerchantDbaName"));
            $this->customAssertValue("MICROSOFT*ONECAREBILL.MS.NETWA", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].DescriptorText"));
            $this->customAssertValue("MICROSOFT CORPORATION", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].LegalCorporateName"));
            $this->customAssertValue("288560095", $response->get("MerchantIds.ReturnedMerchants.Merchant[0].LocationId"));
            $this->customAssertValue("ONE MICROSOFT WAY", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].Address.Line1"));
            $this->customAssertValue("REDMOND", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].Address.City"));
            $this->customAssertValue("98052", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].Address.PostalCode"));
            $this->customAssertValue("WA", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].Address.CountrySubdivision.Code"));
            $this->customAssertValue("8003865550", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].PhoneNumber"));
            $this->customAssertValue("4816 - COMPUTER NETWORK-INFORMATION SERVICES", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].MerchantCategory"));
            $this->customAssertValue("MICROSOFT", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].MerchantDbaName"));
            $this->customAssertValue("MICROSOFT*ONECARE08003865550WA", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].DescriptorText"));
            $this->customAssertValue("MICROSOFT CORPORATION", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].LegalCorporateName"));
            $this->customAssertValue("288560095", $response->get("MerchantIds.ReturnedMerchants.Merchant[1].LocationId"));
            $this->customAssertValue("ONE MICROSOFT WAY", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].Address.Line1"));
            $this->customAssertValue("REDMOND", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].Address.City"));
            $this->customAssertValue("98052", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].Address.PostalCode"));
            $this->customAssertValue("WA", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].Address.CountrySubdivision.Code"));
            $this->customAssertValue("8003865550", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].PhoneNumber"));
            $this->customAssertValue("4816 - COMPUTER NETWORK-INFORMATION SERVICES", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].MerchantCategory"));
            $this->customAssertValue("MICROSOFT", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].MerchantDbaName"));
            $this->customAssertValue("MICROSOFT*ONECARE800-888-4081WA", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].DescriptorText"));
            $this->customAssertValue("MICROSOFT CORPORATION", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].LegalCorporateName"));
            $this->customAssertValue("0", $response->get("MerchantIds.ReturnedMerchants.Merchant[2].LocationId"));
            

        }
        
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



