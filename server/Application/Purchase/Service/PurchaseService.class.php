<?php

/*
 * @app Purchase
 * @package Purchase.service.Purchase
 * @author laofahai@TEam Swift
 * @link https://ng-erp.com
 * */
namespace Purchase\Service;
use Common\Model\CommonModel;

class PurchaseService extends CommonModel {

    protected $_auto = [
        ["user_id", "get_current_user_id", 1, "function"],
        ["company_id", "get_current_company_id", 1, "function"]
    ];

}