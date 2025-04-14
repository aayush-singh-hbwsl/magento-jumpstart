define([
    'jquery',
    'jquery/ui'
    ], function($){
        $.widget('mage.myCustomWidget', {
            options: {
                value: 1,
                message:'test'
            },
            /**
             * Widget initialization
             * @private
             */
             _create: function() {
             	   
            }
        });

    return $.mage.myCustomWidget;
});
