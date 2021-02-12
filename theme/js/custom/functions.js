// jQuery Mask example
const maskExample = () => {

    jQuery('.money').mask('#.##0,00', {reverse: true});
    jQuery('.cpf').mask('000.000.000-00', {reverse: true});
    jQuery('.cnpj').mask('00.000.000/0000-00', {reverse: true});

    // Brazilian Cellphone numbers
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    jQuery('.br-numbers').mask(SPMaskBehavior, spOptions);
}


// Page Loaded
jQuery(document).ready( () => {
    maskExample();
});