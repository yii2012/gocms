package routers

import (
	"gocms/controllers"
	"github.com/astaxie/beego"
)

func init() {
    beego.Router("/", &controllers.MainController{})

	//登录
	beego.Router("/login", &controllers.LoginController{})
}
