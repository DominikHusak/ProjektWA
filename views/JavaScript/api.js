$(document).ready(function() {
    getCryptoData();
});

function getCryptoData() {
    $.ajax({
        url: 'https://api.coingecko.com/api/v3/coins/markets',
        method: 'GET',
        data: {
            ids: 'bitcoin,ethereum,dogecoin,cardano,solana,litecoin,ripple,polkadot,binancecoin,chainlink,tezos,stellar,vechain,uniswap,cosmos',
            vs_currency: 'usd'
        },
        success: function(data, status) {
            console.log('Data received: ' + data + status);
            createTable(data);
            setInterval(getCryptoData, 600000);
        },
        error: function(data) {
            retryConnection();
            alert('Error occurred while connecting to CoinGecko API. We apologize for the problems.');
        }
    });
}

function createTable(data) {
    var table = $('#cryptoCurrencyTable tbody');
    table.empty();
    data.forEach(function(crypto, index) {
        var row = $('<tr>');
        row.append($('<th scope="row">').text(index + 1));
        row.append($('<td>').text(crypto.name));
        row.append($('<td>').text(crypto.current_price));
        var currentDate = new Date();
        var currentTime = currentDate.getFullYear() + '-' + currentDate.getMonth() + '-' + currentDate.getDate() + '/' + currentDate.getHours() + ':' + currentDate.getMinutes() + ':' + currentDate.getSeconds();
        row.append($('<td>').text(currentTime));
        table.append(row);
    });
}

function retryConnection() {
    setTimeout(function() {
        getCryptoData();
    }, 5000);
}