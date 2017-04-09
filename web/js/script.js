function conversionKursToSum(sum_0) {

    var kurs_new = $('#auctions-kurs').val();
    var sum_new = sum_0 * kurs_new;
    $('#auctions-sum').val(sum_new);
}

function conversionSumToKurs(sum_0) {

    var sum_new = $('#auctions-sum').val();
    var kurs_new = sum_new / sum_0;
    $('#auctions-kurs').val(kurs_new);
}