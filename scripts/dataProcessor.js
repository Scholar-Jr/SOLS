function queryAndPutConfessions() {
    $.ajax({
        url: "functions/queryConfessions.php",
        success: function (result) {
            document.getElementById('confessionsArea').innerHTML = parserData(result)
        }
    })
}

function searchAndPutConfessions(keyword) {
    $.ajax({
        url: "functions/searchConfessions.php",
        type: "POST",
        data: {
            keyword: keyword
        },
        success: function (result) {
            document.getElementById('confessionsArea').innerHTML = parserData(result)
        }
    })
}

function parserData(result) {
    // 将JSON数据转换为JS对象
    let data = $.parseJSON(result)

    // 定义htmlStatement变量用来存放html
    let htmlStatement = ""

    // forEach遍历并合成数据
    data.forEach(function (item) {
        htmlStatement +=
            "<div class='archives-confessions'>" +
            "   <h2><span class='name'>" + item['sender'] + "</span>&nbsp;<span>对</span>&nbsp;<span class='name'>" + item['recipient'] + "</span>&nbsp;说</h2>" +
            "       <svg class='quotation-mark' xmlns='http://www.w3.org/2000/svg' width='87.782' height='35.156' viewBox='0 0 87.782 63.156'>" +
            "           <path data-name='“'" +
            "               d='M572.194,664.747c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.63,0-10.015.2-10.015-3.673,0-10.022,13.962-19.18,18.983-21.345-0.832-4.565-1.726-6.682-3.477-5.866-17.195,8.007-28.562,23.848-28.562,40.943C552.82,659.073,563.3,664.747,572.194,664.747Zm50.074,0c10.18,0,18.047-5.667,18.341-15.2,0.263-8.5-6.4-16.884-14.644-16.884-8.631,0-10.016.2-10.016-3.673,0-10.022,13.963-19.18,18.984-21.345-0.833-4.565-1.726-6.682-3.478-5.866-17.194,8.007-28.561,23.848-28.561,40.943C602.894,659.073,613.377,664.747,622.268,664.747Z'" +
            "               transform='translate(-552.812 -601.594)'></path>" +
            "       </svg>" +
            "   <p class='content'>" + item['content'] + "</p>" +
            "   <p class='time'>" + item['date'] + "</p>" +
            "</div>"
    })

    return htmlStatement
}