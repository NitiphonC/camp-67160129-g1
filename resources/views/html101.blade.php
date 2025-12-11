<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/boostrap.css">
  <title>Workshop</title>
  <style>
    /* พื้นหลังและโครงสร้าง */
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ff4f81, #1e90ff);
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* กล่องฟอร์ม */
    .register-box {
      background: rgba(0,0,0,0.7);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.5);
      width: 400px;
      color: white;
    }

    /* หัวข้อฟอร์ม */
    .register-box h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      letter-spacing: 1px;
      text-shadow: 2px 2px 5px black;
    }

    /* input user ฟอร์ม */
    .user-box {
      display: flex;
      justify-content: space-between;
      gap: 5px;
    }
    .user-box input[placeholder="Fistname"] {
      box-sizing: border-box;
      width: 50%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius:8px 0 0 8px;
      background: #333;
      color: white;
      font-size: 16px;
    }
    .user-box input[placeholder="Lastname"] {
      width: 50%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 0 8px 8px 0;
      background: #333;
      color: white;
      font-size: 16px;
    }
    .birtday-box {
      display: flex;
      justify-content: space-between;
      gap: 5px;
    }
    .birtday-box input[type="date"] {
      box-sizing: border-box;
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius: 8px 0 0 8px;
      background: #333;
      color: white;
      font-size: 16px;
    }

  .birtday-box input[type="age"] {
      box-sizing: border-box;
      width: 20%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-radius:0 8px 8px 0;
      background: #333;
      color: white;
      font-size: 16px;
      text-align: center;
    }

    /* ทำให้ placeholder ของ date อ่านง่าย */
    .birtday-box input[type="date"]::-webkit-calendar-picker-indicator {
      filter: invert(1);  /* เปลี่ยนไอคอนปฏิทินให้เป็นสีขาว */
    }

    /* กล่องรวม gender */
    .gender-box {
      display: flex;
      gap: 10px;         /* ให้มีระยะห่างระหว่างปุ่ม */
    }

    .gender-option {
      flex: 1;             /* ให้แต่ละปุ่มกว้างเท่าๆ กัน */
      position: relative;
    }

    .gender-option input {
      display: none;       /* ซ่อน radio เดิม */
    }

    /* ปุ่มที่เห็นจริง */
    .custom-radio {
      margin: 10px 0;
      display: flex;
      box-sizing: border-box;
      width: 100%;
      padding: 0px 20px;
      background: #333;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid transparent;
      font-size: 30px;
      justify-content: center;
    }

    /* hover ให้ดูคลิกได้ */
    .custom-radio:hover {
      background: #444;
    }

    /* เมื่อถูกเลือก */
    .gender-option input[type="radio"]:checked + .custom-radio {
      border-color: #ff4f81;
      background: #333;
      box-shadow: 0 0 5px #ff4f81;
    }

    .profile-row {
      display: flex;             /* ให้อยู่ข้างกัน */
      align-items: center;       /* จัดให้อยู่กึ่งกลางแนวตั้ง */
      gap: 15px;                 /* ระยะห่างระหว่างรูปกับช่องกรอก */
      margin: 15px 0;
      justify-content: space-between;
    }

    #imageUpload {
      display: none;
    }
    .preview-img img {
      cursor: pointer;
    }
    .preview-img {
      width: 100px;
      height: 100px;
      background: rgba(255,255,255,0.1);
      border: 2px dashed #888;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    /* ไอคอนกล้อง */
    .preview-img::before {
      content: "📷";
      color: #ccc;
      font-size: 25px;
      position: absolute;
      opacity: 0.7;
    }

    /* ซ่อน placeholder กล้องเมื่อมีภาพ */
    .preview-img.has-image::before {
      display: none;
    }

    /* ตัวรูป */
    .preview-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: none;   /* ซ่อนรูปจนกว่าจะมีการอัปโหลด */
      border-radius: 10px;
    }
    .preview-img img {
      object-fit: cover;
      border-radius: 10px;
      border: 2px solid #fff;
    }
    .Living {
      flex:1
    }
    .Living textarea {
      width: 100%;
      height: 100px;
      box-sizing: border-box;
      padding: 10px;
      background: #333;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      resize: none;     /* กันไม่ให้ผู้ใช้ลากขยาย */
    }

    /* ทำให้ placeholder อยู่บนซ้าย */
    .Living textarea::placeholder {
      color: #bbb;
      padding-top: 0;
    }

    .music-color-row {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin: 15px 0;
      align-items: center;
    }

    .color-box,
    .music-box {
      flex: 1;
      color: white;
      font-size: 14px;
    }

    .color-box input[type="color"] {
      width: 100%;
      height: 45px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      padding: 0;
    }

    .music-box .music-options {
      background: #333;
      padding: 10px;
      border-radius: 8px;
      display: flex;
      justify-content: space-around;
      font-size: 10px;
    }

    .music-box label {
      cursor: pointer;
    }

    .music-box input[type="radio"] {
      margin-right: 5px;
    }
    /* กล่อง checkbox */
    .consent-box {
      margin-top: 10px;
      margin-bottom: 10px;
      font-size: 14px;
    }

    /* แถวปุ่ม Reset / Submit */
    .button-row {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }

    /* ปุ่ม Reset */
    .reset-btn {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #666;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .reset-btn:hover {
      background: #888;
    }

    /* ปุ่ม Submit */
    .submit-btn {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #ff4f81;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .submit-btn:hover {
      background: #ff75a0;
    }

  </style>
</head>
<body>
  <div class="register-box">
    <h2>Workshop # HTML-FORM</h2>
    <form>
      <div class="user-box">
        <input type="text" placeholder="Fistname" required>
        <input type="text" placeholder="Lastname" required>
      </div>
      <div class="birtday-box">
        <input type="date" placeholder="Birthday" required>
        <input type="age" placeholder="Age" required>
      </div>
      <div class="gender-box">
        <label class="gender-option">
          <input type="radio" name="gender" value="male">
          <span class="custom-radio"> 👦🏻 </span>
        </label>

        <label class="gender-option">
          <input type="radio" name="gender" value="female">
          <span class="custom-radio"> 👩🏻 </span>
        </label>
      </div>
      <div class="profile-row">
        <div class="preview-img">
          <img id="preview" src="" alt="">
        </div>
        <div class="Living">
          <textarea placeholder="Address"></textarea>
        </div>
        <input type="file" id="imageUpload" accept="image/*">
      </div>

      <div class="music-color-row">
        <div class="color-box">
          <label>Favorite Color</label>
          <input type="color" id="favColor" value="#ff4f81">
        </div>

        <div class="music-box">
          <label>Music Type</label>
          <div class="music-options">
            <label><input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต</label>
            <label><input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง</label>
            <label><input type="radio" name="music" value="อื่นๆ"> อื่นๆ</label>
          </div>
        </div>
      </div>
      <div class="consent-box">
        <label>
          <input type="checkbox" id="consent" required>
          ยินยอมให้เก็บข้อมูล
        </label>
      </div>

      <div class="button-row">
        <button type="reset" class="reset-btn">Reset</button>
        <button type="submit" class="submit-btn">Sign Up</button>
      </div>
    </form>
  </div>
</body>

<script>
const upload = document.getElementById("imageUpload");
const preview = document.getElementById("preview");

preview.parentElement.addEventListener("click", () => upload.click());

upload.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    preview.src = URL.createObjectURL(file);
    preview.style.display = "block";                  // แสดงรูป
    preview.parentElement.style.border = "none";      // เอาเส้นประออก
    preview.parentElement.style.background = "none";  // เอาพื้นหลังออก
    preview.parentElement.classList.add("has-image"); // ใช้ class ถ้าต้องเพิ่มฟีเจอร์ทีหลัง
  }
});
</script>
</html>