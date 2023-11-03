
let boloc = {
    hang: [],
    gia: [],
    dexuat: [],
    ldt: [],
    dungluong: [],
    dllt: []

};
let btn = document.querySelector("#ketqua");

let danhSachHienThi = {}
let listKey = ["gia", "hang", "dexuat", "dungluong", "dllt", "ldt"]
// let link = "?hang = iphone,samsung"
//     const putDb = async () => {

// const res = await fetch("test.php", {
//     method: "GET",
//     headers: {
//         "Content-Type": "application/json"
//     }
// });
// let output = await res.json();
// console.log(output);
// // return danhSachHienThi =  await output






// }

const getshowfilter = async () => {
    const getHang = async () => {
        try {
            const res = await fetch("fetch.php", {
                method: "GET",
                headers: {
                    "Content-Type": "application/json"
                }
            });
            let output = await res.json();
            console.log(output);
            return output

        } catch (error) {

        }
    }

    danhSachHienThi = await getHang()
    hienThiDanhSach();
    // showUIUX()
}





const hienThiDanhSach = async () => {
    if (!!danhSachHienThi) {
        const hangPhone = document.getElementById("hang-phone")
        const giaPhone = document.getElementById("gia-phone")
        const ldtPhone = document.getElementById("ldt-phone") 
        const ncPhone = document.getElementById("dexuat-phone")
        const rawphone = document.getElementById("raw-phone")
        // const dlltPhone = document.getElementById("dllt-phone")
        const dlphPhone = document.getElementById("dlph-phone")

        console.log(hangPhone)

        if (danhSachHienThi.hang.length > 0) {
            let htmlHang = ""
            for (let index = 0; index < danhSachHienThi.hang.length; index++) {
                htmlHang += "<div  id='" + danhSachHienThi.hang[index].value + "'   onclick=\"handleClick('hang','" + danhSachHienThi.hang[index].value + "','" + danhSachHienThi + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.hang[index].tieude + "</p> </div>"
            }
            hangPhone.innerHTML = htmlHang
        }
        if (danhSachHienThi.gia.length > 0) {
            let htmlGia = "";
            for (let index = 0; index < danhSachHienThi.gia.length; index++) {
                htmlGia += "<div id='" + danhSachHienThi.gia[index].value + "'  onclick=\"handleClick('gia','" + danhSachHienThi.gia[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.gia[index].tieude + "</p> </div>"
            }
            giaPhone.innerHTML = htmlGia
        }

        if (danhSachHienThi.dungluong.length > 0) {
            let htmlraw = "";
            console.log("manh dep trai")
            for (let index = 0; index < danhSachHienThi.dungluong.length; index++) {
                htmlraw += "<div id= '" + danhSachHienThi.dungluong[index].value + "'  onclick=\"handleClick('dungluong','" + danhSachHienThi.dungluong[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dungluong[index].tieude + "</p> </div>"
            }
            rawphone.innerHTML = htmlraw
        }
        if (danhSachHienThi.dexuat.length > 0) {
            let htmlnc = "";
            for (let index = 0; index < danhSachHienThi.dexuat.length; index++) {
                htmlnc += "<div id='" + danhSachHienThi.dexuat[index].value + "'  onclick=\"handleClick('dexuat','" + danhSachHienThi.dexuat[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dexuat[index].tieude + "</p> </div>"
            }
            ncPhone.innerHTML = htmlnc
        }

        if (danhSachHienThi.ldt.length > 0) {
            let htmlldt = "";
            for (let index = 0; index < danhSachHienThi.ldt.length; index++) {
                htmlldt += "<div id='" + danhSachHienThi.ldt[index].value + "'  onclick=\"handleClick('ldt','" + danhSachHienThi.ldt[index].value + "')\"  class=\"card_ldt\">" + "<img src='" + danhSachHienThi.ldt[index].img + "'>" + "<p class=\"text\">" + danhSachHienThi.ldt[index].tieude + "</p> </div>"
            }
            ldtPhone.innerHTML = htmlldt
        }



        if (danhSachHienThi.dllt.length > 0) {
            let htmldllt = "";
            for (let index = 0; index < danhSachHienThi.dllt.length; index++) {
                htmldllt += "<div id= '" + danhSachHienThi.dllt[index].value + "'  onclick=\"handleClick('dllt','" + danhSachHienThi.dllt[index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi.dllt[index].tieude + "</p> </div>"
            }
            dlphPhone.innerHTML = htmldllt
        }


    }



};

function handleClick(key, value, danhSachHienThi) {
    handleData(key, value)
    showUIUX()
    handelefilter();

}

const showUIUX = async () => {
    const showHang = document.getElementById("showHang")
    let showHtml = "";
    let deleteAll = `<div> <p onclick=\"handleDeleteAll()\" class="xoatatca" id="deleteALL" style="color: blue; font-size: 14px;cursor: pointer;}">Xóa tất cả</p> </div>`
    if (boloc.dexuat.length > 0 || boloc.dungluong.length > 0 || boloc.hang.length > 0 || boloc.gia.length > 0 || boloc.dllt.length > 0 || boloc.ldt.length > 0) {
        for (indexKey = 0; indexKey < listKey.length; indexKey++) {
            for (let index = 0; index < danhSachHienThi[listKey[indexKey]].length; index++) {
                let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                id.style.border = "1px solid #666"
                for (let item = 0; item < boloc[listKey[indexKey]].length; item++) {
                    if (boloc[listKey[indexKey]][item] == danhSachHienThi[listKey[indexKey]][index].value) {
                        let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                        id.style.border = "2px solid #288ad6"
                        showHtml += "<div   onclick=\"handleClick('" + listKey[indexKey] + "','" + danhSachHienThi[listKey[indexKey]][index].value + "')\"  class=\"spc\">" + "<p>" + danhSachHienThi[listKey[indexKey]][index].tieude + "</p> " + " &emsp; <i class=\"fa-regular fa-calendar-xmark\" \></i> </div>"
                    }
                }
            }
        }
        showHtml += deleteAll

    } else {
        for (indexKey = 0; indexKey < listKey.length; indexKey++) {
            for (let index = 0; index < danhSachHienThi[listKey[indexKey]].length; index++) {
                let id = document.getElementById(danhSachHienThi[listKey[indexKey]][index].value)
                id.style.border = "1px solid #666"

            }
        }
        console.log(boloc, "afdsa")
    }

    showGia.innerHTML = showHtml
}

const handleDeleteAll = () => {
    boloc.hang.length = 0
    boloc.dexuat.length = 0
    boloc.dungluong.length = 0
    boloc.gia.length = 0
    boloc.ldt.length = 0
    boloc.dllt.length = 0
    showUIUX();
    handelefilter()
}

function handleData(key, value) {
    if (key === "hang") {
        if (boloc.hang.length > 0) {
            for (let index = 0; index < boloc.hang.length; index++) {
                if (value === boloc.hang[index]) {
                    return boloc.hang.splice(index, 1)
                }
            }
            return boloc.hang.push(value)
        }
        return boloc.hang.push(value)
    }
    if (key === "gia") {
        if (boloc.gia.length > 0) {
            for (let index = 0; index < boloc.gia.length; index++) {
                if (value === boloc.gia[index]) {
                    return boloc.gia.splice(index, 1)
                }
            }
            return boloc.gia.push(value)

        }
        return boloc.gia.push(value)
    }
    if (key === "dexuat") {
        if (boloc.dexuat.length > 0) {
            for (let index = 0; index < boloc.dexuat.length; index++) {
                if (value === boloc.dexuat[index]) {
                    return boloc.dexuat.splice(index, 1)
                }
            }
            return boloc.dexuat.push(value)

        }
        return boloc.dexuat.push(value)
    }
    if (key === "dungluong") {
        if (boloc.dungluong.length > 0) {
            for (let index = 0; index < boloc.dungluong.length; index++) {
                if (value === boloc.dungluong[index]) {
                    return boloc.dungluong.splice(index, 1)
                }
            }
            return boloc.dungluong.push(value)

        }

        return boloc.dungluong.push(value)
    }
    if (key === "dllt") {
        if (boloc.dllt.length > 0) {
            for (let index = 0; index < boloc.dllt.length; index++) {
                if (value === boloc.dllt[index]) {
                    return boloc.dllt.splice(index, 1)
                }
            }
            return boloc.dllt.push(value)

        }
        return boloc.dllt.push(value)
    }
    if (key === "ldt") {
        if (boloc.ldt.length > 0) {
            for (let index = 0; index < boloc.ldt.length; index++) {
                if (value === boloc.ldt[index]) {
                    return boloc.ldt.splice(index, 1)
                }
            }
            return boloc.ldt.push(value)

        }
        return boloc.ldt.push(value)
    }
}



const handelefilter = async () => {
    let link = 'http://localhost/php%20shopping/shoppingphp/customer/getsl.php?';
    for (indexKey = 0; indexKey < listKey.length; indexKey++) {
        if (boloc[listKey[indexKey]].length > 0) {
            link += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"

        }

    }
    postApi = link.slice(0, -1)
    console.log(postApi);


    // fetch(postApi).then(function(response) {
    //     let response = await response.json();

    // }).then(function(posts) {
    //     console.log(posts);
    // });

    try {
        let btn = document.querySelector("#ketqua"),
            spinIcon = document.querySelector(".spinner"),
            btnText = document.querySelector(".btn-text");
        btn.style.cursor = "wait";
        btn.classList.add("checked");
        spinIcon.style.display = "block";
        spinIcon.classList.add("spin");
        btnText.textContent = "Loading";
        const res = await fetch(postApi, {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        });
        let sumNumber = await res.json()
        if (sumNumber.soluong.soluong > 0) {
            btn.style.pointerEvents = "auto"
            btn.style.cursor = "pointer";
            btn.style.background = "#4070f4"

            spinIcon.style.display = "none";
            btnText.textContent = "Xem " + sumNumber.soluong.soluong + " kết quả ";

        } else {
            btn.style.pointerEvents = "none";
            spinIcon.style.display = "none";
            btn.style.background = "red"
            btnText.textContent = "Xem " + sumNumber.soluong.soluong + " kết quả ";

        }

        return output
    } catch (error) {

    }

    // fetch(postApi2).then(function(response){
    //     return response.json();
    // }).then(function(posts2){
    //     console.log(posts2);
    // });







}

const html = (danhsach) => {
    console.log(danhsach, "dad")
    if (danhsach && danhsach.length > 0) {
        let hienthi = ""
        let produc = document.querySelector("#product-carousel");
        if (produc) {
            produc.remove();
        }
        let late = document.querySelector("#latest-product")
        late.innerHTML = hienthi;


        for (let index = 0; index < danhsach.length; index++) {
            console.log(danhsach, "qrwer")
            hienthi += ` <div id="single-product" class="card-dienthoai" style="width:200px">
                                <div  class="product-image">
                                     <img  id="single-product-img" src="${danhsach[index].img}"  alt="">
                                </div>

                                <h2 id="single-product-tieude"><a href="single-product.html">${danhsach[index].ten}</a></h2>

                                <div id="single-product-gia" class="product-carouse">
                                    <ins>${Number(danhsach[index].gia).toLocaleString() } VND</ins>
                                    
                                </div>
                            </div>`

        }
        late.innerHTML = hienthi
        late.style.display = "flex";
        late.style.flexWrap = "wrap";
        late.style.gap = "24px"
    }


}

btn.onclick = handleClickKetQua = async () => {
    let  hienthiurl  = "http://localhost/php%20shopping/shoppingphp/customer/getds.php?"
    let url = 'http://localhost/php%20shopping/shoppingphp/customer/getds.php?';
    for (indexKey = 0; indexKey < listKey.length; indexKey++) {
        if (boloc[listKey[indexKey]].length > 0) {
            url += listKey[indexKey] + '=' + boloc[listKey[indexKey]].join() + "&"

        }

    }
    Api = url.slice(0, -1)
    try {
        let loading = document.querySelector("#loading");
        loading.style.display = "flex";

        const res = await fetch(Api, {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        });
        let danhsach = await res.json();
        console.log(danhsach, "danhsachAPI")
        loading.style.display = "none";
        return html(danhsach)




        return output
    } catch (error) {

    }

}



getshowfilter()
hienThiDanhSach()
showUIUX()

// hienThiDanhSach()
console.log(danhSachHienThi, "danhSachHienThi")