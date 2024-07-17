export default {
    capitalizeWords: function (arr) {
        return arr.map((element) => {
            return (
                element.charAt(0).toUpperCase() +
                element.substring(1).toLowerCase()
            );
        });
    },

    makeReadable: function (key) {
        return this.capitalizeWords(key.replaceAll("_", " ").split(" ")).join(
            " "
        );
    },
    rupiah: function (angka) {
        return "Rp. " + new Intl.NumberFormat("en-ID").format(angka);
    },
    imageUrl: function (url) {
        if (url !== undefined) {
            if (url.match(/http/)) {
                return url;
            } else {
                if (url.includes("assets")) {
                    return url;
                } else {
                    return "/storage/" + url;
                }
            }
        } else {
            return url;
        }
    },
    autoDiscount: function (price) {
        price = parseInt(price);
        const discountPercentage =
            Math.floor(Math.random() * (30 - 20 + 1)) + 10;
        const discountAmount = (price * discountPercentage) / 100;
        const discountedPrice = price + discountAmount;

        return discountedPrice;
    },
    stripTags: function (string) {
        if (string !== undefined) return string.replace(/(<([^>]+)>)/gi, "");
    },
    WaButton: function (Global, path) {
        let waHttp = "https://wa.me/";
        let number = Global?.Settings?.no_whatsapp ?? "081234567890";
        let text = Global?.Settings?.wa_message ?? "Hello";
        let link = Global?.currentUrl + path;
        number.replace(/^08/, "628");
        let format = waHttp + number + "?text=" + text + "%0A%0A%0A" + link;
        return format;
    },
    redirectToWhatsApp: function (productId) {
        const message = `Halo, saya tertarik dengan produk dengan ID ${productId}. Bisa saya dapatkan detailnya?`;
        const phoneNumber = "6281234567890";
        const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
            message
        )}`;
        window.open(url, "_blank");
    },
};
