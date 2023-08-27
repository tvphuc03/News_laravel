// Hàm showProducts
function showProducts() {
    var productList = document.getElementById("productList"); // Lấy phần tử có id "productList"
    if (productList.style.display === "none") { // Kiểm tra nếu thuộc tính display của productList là "none"
        productList.style.display = "block"; // Đặt lại thuộc tính display thành "block" để hiển thị
    } else {
        productList.style.display = "none"; // Nếu đã hiển thị, đặt thuộc tính display thành "none" để ẩn
    }
}

// Hàm check
function check() {
    var button = document.getElementById("xoa"); // Lấy phần tử có id "xoa"
    var checkboxes = document.querySelectorAll('input[type="checkbox"]'); // Lấy tất cả các phần tử input có type là "checkbox"
    for (var i = 0; i < checkboxes.length; i++) { // Duyệt qua từng checkbox
        if (checkboxes[i].checked == false) { // Nếu checkbox chưa được chọn
            checkboxes[i].checked = true; // Đặt thuộc tính checked của checkbox thành true
            button.hidden = false; // Hiển thị phần tử có id "xoa"
        } else {
            button.hidden = true; // Nếu checkbox đã được chọn, ẩn phần tử có id "xoa"
            checkboxes[i].checked = false; // Đặt thuộc tính checked của checkbox thành false
        }
    }
}

// Hàm anhien
function anhien() {
    var checkboxes = document.getElementsByName("checkboxes[]"); // Lấy tất cả các phần tử có name là "checkboxes[]"
    var button = document.getElementById("xoa"); // Lấy phần tử có id "xoa"
    var checkedCount = 0; // Khởi tạo biến đếm số checkbox được chọn
    for (var i = 0; i < checkboxes.length; i++) { // Duyệt qua từng checkbox
        if (checkboxes[i].checked) { // Nếu checkbox được chọn
            checkedCount++; // Tăng biến đếm lên
        }
    }
    if (checkedCount > 0) { // Nếu có ít nhất 1 checkbox được chọn
        button.hidden = false; // Hiển thị phần tử có id "xoa"
    } else {
        button.hidden = true; // Nếu không có checkbox nào được chọn, ẩn phần tử có id "xoa"
    }
}
