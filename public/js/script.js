$(document).ready(function () {
    function ShowData() {
        $.get("/json", function (data) {
            $("#name_gold").html(data[4]["name"]);
            $("#buy").html(data[4]["bid"]);
            $("#sell").html(data[4]["ask"]);
            $("#up_down").html(data[4]["diff"]);
            let str = String(data[4]["diff"]);
            if (str.includes("+")) {
                console.log("+++");
                var re = document.getElementById("icon");
                re.innerHTML =
                "<i class='bi bi-caret-up-fill  ' style='color:#04d733ff'></i>";;
            } else if (str.includes("-")) {
                console.log("---");
                var re = document.getElementById("icon");
                re.innerHTML =
                    "<i class='bi bi-caret-down-fill ' style='color:#ff6c6cbf'></i>";
            } else {
                console.log("Nothing !!");
            }
        });
    }
    ShowData();
    setInterval(ShowData, 15000);

    const currentDate = new Date();
    const year = currentDate.getFullYear() + 543;
    const thaiMonth = currentDate.toLocaleDateString("th-TH", { month: "long" });
    const thaiDate = `${currentDate.getDate()} ${thaiMonth} พ.ศ. ${year}`;
    $("#date").html(thaiDate);

    $.ajax({
        url: "/user_data",
        type: "GET",
        dataType: "json",
        success: function (result) {
            $.each(result, function () {
                // กันลืม ที่เอามาไว้ใน ajax เพราะเอาไว้นอกมันจะไม่รู้จักค่าbalancecreditของเรา เลยโหลดข้อมูลมาแล้วให้มันทำงานหลังจากโหลดข้อมูล
                const user_credit = JSON.parse(result.data_user.balance_credit);
                const user_token = JSON.parse(result.data_user.balance_token);
                const tokenPgold = JSON.parse(result.about.token_per_gold);
                const creditPtoken = JSON.parse(result.about.credit_per_token);
                // console.log(tokenPgold, creditPtoken);
                // แลกทองบายแวนเนอร์
                const selectGold = document.getElementById("selectGold");
                const tokenOutput = document.getElementById("tokenOutput");
                selectGold.addEventListener("input", calculateGold);
                tokenOutput.addEventListener("input", calculateGold);

                function calculateGold() {
                    const GoldPerToken = tokenPgold;
                    const selectGolds = Number(selectGold.value);

                    if (!isNaN(selectGolds) && selectGolds != 0) {
                        const result = GoldPerToken * selectGolds;
                        if (result <= user_token) {
                            document.getElementById("tokenOutputSend").value = result;
                            document.getElementById("tokenOutput").value = result;
                            console.log("Can trade gold weight :",selectGolds," bath");
                        } else if (result > user_token) {
                            const less_is = result - user_token;
                            message_less = "ต้องการอีก " +less_is + " โทเคน";
                            document.getElementById("tokenOutput").value = message_less;
                            console.log("less than token, need more :",less_is,"token");
                        } else {
                            console.log("Error");
                        }
                    } else {
                        document.getElementById("result").value =
                            "Some Thing Error";
                        console.log("Some Thing Error");
                    }
                }

                // แลกโทเคนบายแวนเนอร์
                const creditInput = document.getElementById("creditInput");
                const tokenInput = document.getElementById("tokenInput");
                creditInput.addEventListener("input", calculate);
                tokenInput.addEventListener("input", calculate);

                function calculate() {
                    const tokenPerCr = creditPtoken;
                    const creditInputs = Number(creditInput.value.replace(/[^0-9]/g, ""));
                    const tokenInputs = Number(tokenInput.value.replace(/[^0-9]/g, ""));

                    if (this.id === "creditInput" && !isNaN(creditInputs)) {
                        const result = creditInputs / tokenPerCr;
                        if (
                            creditInputs % tokenPerCr === 0 &&
                            creditInputs <= user_credit && creditInputs != 0
                        ) {
                            document.getElementById("tokenInput").value =
                                result;
                            document.getElementById("creditInput").value =
                                creditInputs;
                        } else if (result > user_credit) {
                            console.log("less than credit");
                        } else {
                            console.log("Error getting");
                            // console.log(tokenInputs,creditInputs);
                            document.getElementById('tokenInput').value = '';
                        }
                    } else if (
                        this.id === "tokenInput" &&
                        !isNaN(tokenInputs) &&
                        tokenInputs % tokenPerCr <= user_credit
                    ) {
                        const results = tokenInputs * tokenPerCr;
                        if (
                            results % tokenPerCr === 0 &&
                            results <= user_credit && tokenInputs != 0
                        ) {
                            document.getElementById("creditInput").value =
                                results;
                        } else if (tokenInputs/tokenPerCr > user_credit && results > user_credit) {
                            console.log("more than credit");
                        } else {
                            console.log("more than credit then clear fields");
                            document.getElementById('creditInput').value = '';
                        }
                    } else {
                        console.log("Some Thing Error");
                    }
                }
            })
        },
    });
});


// ทั้ง3 function มีผลลัพท์เหมือนกันหมด ต่างแค่วิธีการนำไปแสดง

function showModal(value) {
    value = JSON.parse(value);
    $("#name").html(value.name);
    $("#created_at").html(value.created_at);
    $("#status").html(value.status);
    $("#total").html(value.total+" เครดิต");
    $("#name_bank").html(value.name_bank);
    $("#idbank").html(value.idbank);
    $("#slip_file").attr("src", value.slip_file);
    $("#lost-total").html(value.lost_token+" โทเคน");
    if (value.type == "ฝาก") {
        $("#show-bank").show();
        $("#show-losttoken").hide();
        $("#show-topup").show();
        $("#lost-total").html("");
    } else if (value.type == "ถอน") {
        $("#show-bank").show();
        $("#show-losttoken").hide();
        $("#show-topup").hide();
        $("#slip_file").attr("src", "");
        $("#lost-total").html("");
    } else if (value.type == "แลก") {
        $("#total").html(value.total+" บาท");
        $("#show-bank").hide();
        $("#show-topup").hide();
        $("#show-losttoken").show();
        $("#name_bank").html("");
        $("#idbank").html("");
        $("#slip_file").attr("src", "");
        $("#lost-total").html(value.lost_token+" โทเคน");
    }
}


$(document).ready(function() {
    let value = Laravel.key;
    console.log(value);
    window.onload = function() {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#pdpa").modal('show');
    }
    $("#checkbox").change(function() {
        if (this.checked) {
            $("#myButton").prop("disabled", false);
            $("#myButton").click(function() {
                $("#pdpa").modal('hide');
            });
        } else {
            $("#myButton").prop("disabled", true);
            $("#myButton").off("click");
        }
    });
});
