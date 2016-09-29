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
use Test\BaseTest;



class MerchantIdentifierTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_merchant_identifier()
        {
            

            

            $map = new RequestMap();
            $map->set("MerchantId", "MICROSOFT");
            $map->set("Type", "FuzzyMatch");
            
            
            $response = MerchantIdentifier::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.Message", "7 merchants found.");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].Address.Line1", "ONE MICROSOFT WAY");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].Address.City", "REDMOND");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].Address.PostalCode", "98052");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].Address.CountrySubdivision.Code", "WA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].PhoneNumber", "8003865550");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].MerchantCategory", "4816 - COMPUTER NETWORK-INFORMATION SERVICES");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].MerchantDbaName", "MICROSOFT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].DescriptorText", "MICROSOFT*ONECAREBILL.MS.NETWA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].LegalCorporateName", "MICROSOFT CORPORATION");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[0].LocationId", "288560095");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].Address.Line1", "ONE MICROSOFT WAY");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].Address.City", "REDMOND");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].Address.PostalCode", "98052");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].Address.CountrySubdivision.Code", "WA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].PhoneNumber", "8003865550");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].MerchantCategory", "4816 - COMPUTER NETWORK-INFORMATION SERVICES");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].MerchantDbaName", "MICROSOFT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].DescriptorText", "MICROSOFT*ONECARE08003865550WA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].LegalCorporateName", "MICROSOFT CORPORATION");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[1].LocationId", "288560095");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].Address.Line1", "ONE MICROSOFT WAY");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].Address.City", "REDMOND");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].Address.PostalCode", "98052");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].Address.CountrySubdivision.Code", "WA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].PhoneNumber", "8003865550");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].MerchantCategory", "4816 - COMPUTER NETWORK-INFORMATION SERVICES");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].MerchantDbaName", "MICROSOFT");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].DescriptorText", "MICROSOFT*ONECARE800-888-4081WA");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].LegalCorporateName", "MICROSOFT CORPORATION");
            $this->customAssertEqual($ignoreAssert, $response, "MerchantIds.ReturnedMerchants.Merchant[2].LocationId", "0");
            

            self::putResponse("example_merchant_identifier", $response);
            
        }
        
    
    
}



