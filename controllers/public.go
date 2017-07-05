package controllers

import (
	"github.com/astaxie/beego"
	"fmt"
	"strings"
)

type PublicController struct {
	beego.Controller
}

func (c *PublicController) Get() {
	c.TplName = "login.tpl"
}
