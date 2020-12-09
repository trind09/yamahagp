
<style>

.button-div {
  display: -webkit-box;
  display: flex;
  cursor: pointer;
  -webkit-box-align: center;
          align-items: center;
  padding-right: 40px;
}
.button-div:hover .button__border-circle {
  -webkit-transform: translateX(60px);
          transform: translateX(60px);
}
.button-div:hover .button__mask-circle {
  -webkit-clip-path: circle(25px at 85px);
          clip-path: circle(25px at 85px);
}

.button__text {
  z-index: 1;
  font-size: 14px;
  margin-right: -18px;
  color: #FAFAFA;
  letter-spacing: 0.05em;
}

.button__wrapper {
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
}

.button__arrow {
  left: 35px;
  height: 3px;
  width: 50px;
  display: -webkit-box;
  display: flex;
  position: absolute;
  -webkit-box-align: center;
          align-items: center;
  background-color: #B3D23F;
}
.button__arrow:after {
  content: '';
  width: 0;
  height: 0;
  top: -5px;
  right: -7px;
  position: absolute;
  border-top: 7px solid transparent;
  border-bottom: 7px solid transparent;
  border-left: 7px solid #B3D23F;
}

.button__border-circle {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 1px solid #BFBFBF;
  -webkit-transition: -webkit-transform 987ms;
  transition: -webkit-transform 987ms;
  transition: transform 987ms;
  transition: transform 987ms, -webkit-transform 987ms;
}

.button__mask-circle {
  width: 50px;
  height: 50px;
  position: absolute;
  border-radius: 50%;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-clip-path: circle(25px);
          clip-path: circle(25px);
  -webkit-transition: -webkit-clip-path 987ms;
  transition: -webkit-clip-path 987ms;
  transition: clip-path 987ms;
  transition: clip-path 987ms, -webkit-clip-path 987ms;
}

.button__small-circle {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  -webkit-transform: translateX(60px);
          transform: translateX(60px);
  background-color: #B3D23F;
}
</style>


  <div class="button-div">
  <div class="button__text">Learn more...</div>
  
  <div class="button__wrapper">
    <div class="button__arrow"></div>
    <div class="button__border-circle"></div>
    <div class="button__mask-circle">
      <div class="button__small-circle"></div>
    </div>
  </div>
</div>