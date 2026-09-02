<?php

use App\Models\GatewayType;
use App\Models\PaymentType;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $pt = PaymentType::find(53);

        if(!$pt) {
            $type = new PaymentType();
            $type->id = 53;
            $type->name = 'PromptPay';
            $type->gateway_type_id = GatewayType::PROMPTPAY;
            $type->save();
        }

        $gt = GatewayType::find(30);

        if(!$gt) {
            $type = new GatewayType();
            $type->id = 30;
            $type->alias = 'promptpay';
            $type->name = 'PromptPay';
            $type->save();
        }
    }
};
