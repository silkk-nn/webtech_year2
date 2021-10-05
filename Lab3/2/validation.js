function validateForm() {
    
    let perID = document.forms["formall"]["idNumber"].value;
    if (perID.length < 13 || isNaN(perID)) {
        alert("กรุณากรอกเลขบัตรประชาชนหรือกรอกให้ตรงตามรูปแบบด้วยค่ะ");
        return false;
    }
    let perSex = document.forms["formall"]["nameTitle"].value;
    if (perSex =="000" ) {
        alert("กรุณากรอกคำนำหน้าด้วยค่ะ");
        return false;
    }
    let perName = document.forms["formall"]["firstName"].value;
    if (perName.length < 2 ) {
        alert("กรุณากรอกชื่อจริงด้วยค่ะ");
        return false;
    }
    let perSur = document.forms["formall"]["lastName"].value;
    if (perSur.length < 2 ) {
        alert("กรุณากรอกนามสกุลด้วยค่ะ");
        return false;
    }
    let perAdd1 = document.forms["formall"]["address1"].value;
    if (perAdd1.length < 5 ) {
        alert("กรุณากรอกที่อยู่ด้วยค่ะ");
        return false;
    }
    let perAdd2 = document.forms["formall"]["address2"].value;
    if (perAdd2.length < 5 ) {
        alert("กรุณากรอกที่อยู่ด้วยค่ะ");
        return false;
    }
    let perScity = document.forms["formall"]["subdistrict"].value;
    if (perScity.length < 2 ) {
        alert("กรุณากรอกตำบลด้วยค่ะ");
        return false;
    }
    let perBcity = document.forms["formall"]["district"].value;
    if (perBcity.length < 2 ) {
        alert("กรุณากรอกอำเภอด้วยค่ะ");
        return false;
    }
    let perDis = document.forms["formall"]["province"].value;
    if (perDis =="ไม่เติม" ) {
        alert("กรุณากรอกจังหวัดด้วยค่ะ");
        return false;
    }
    let perPid = document.forms["formall"]["postalCode"].value;
    if (perPid.length < 5 || isNaN(perPid) ) {
        alert("กรุณากรอกรหัสไปรษณีย์หรือกรอกให้ตรงตามรูปแบบด้วยค่ะ");
        return false;
    }
    let perPhone = document.forms["formall"]["tel"].value;
    if (perPhone.length < 9 || isNaN(perPhone)) {
        alert("กรุณากรอกเบอร์โทรศัพธ์หรือกรอกให้ตรงตามรูปแบบด้วยค่ะ");
        return false;
    }
}