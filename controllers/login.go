package controllers

import (
	"github.com/astaxie/beego"
	"fmt"
	"strings"
)

type LoginController struct {
	beego.Controller
}

func (c *LoginController) Get() {
	c.TplName = "login.tpl"
}

func (c *LoginController) Post()  {
	adminName := strings.TrimSpace(c.GetString("admin_name"))
	adminPassword := strings.TrimSpace(c.GetString("admin_password"))
	fmt.Println(adminName)

	if adminName == "" {
		c.Ctx.WriteString("adminName is empty!")
	}
	if adminPassword == "" {
		c.Ctx.WriteString("adminPassword is empty!")
	}
}