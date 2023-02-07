<div class="container mt-5 mb-5" >
  <div class="col-md-6" style="float:none; margin:0 auto;"> 
    <div class="modalshow mt-5 mb-5" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header" style="background-color:#f9f9f9">

            <h5 class="modal-title">로그인</h5>
          </div>
          <form class="form-horizontal" action="/index.php/auth/authentication" method="post" style="background-color:#f9f9f9">
            <div class="modal-body">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">이메일</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="이메일">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">비밀번호</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="비밀번호">
              </div>        

              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="로그인"/>
              </div>

            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>

