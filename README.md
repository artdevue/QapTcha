# QapTcha Snippets v2.5 Revo
========
<table>
  <tr>
    <td><img src="http://www.artdevue.com/temp/img/2a003d73f1.jpg"></td><td valign="middle">
    Original article<br/>
    [Home Page QapTcha](http://www.myjqueryplugins.com/QapTcha)<br/>
    [Online Demo QapTcha](http://www.myjqueryplugins.com/QapTcha/demo)
    </td>
  </tr>
</table>

**Snippet written spontaneously August 8, 2011, the original article [here](http://community.modx-cms.ru/blog/addons/2152.html)**
## Download [Here](http://github.com/artdevue/QapTcha/downloads)

<img src="http://www.artdevue.com/temp/img/8607861e38.jpg">

## Quick Start

### We put a challenge before the captcha form below:
#### A simple call —
```php
[[!Qaptcha]]
```
#### Full call -
```php
[[!Qaptcha?
    &disabledSubmit=`false`
    &txtLock=`Заблокирована: форма не может быть отправлена`
    &txtUnlock=`Разблокирована: форма может быть отправлена`
]]
```
### Parameters:
* disabledSubmit — by default ** true **,
* txtLock — by default ** Locked: form can't be submited **,
* txtUnlock — by default ** Unlocked: form can be submited **

### We put a placeholder before pressing submit.
```php
[[+btQaptcha]]
```
In calling the form, put
```php
&preHooks=`validQaptcha`
```

## Example Call Register
```html
[[!Qaptcha? &disabledSubmit=`false` &txtLock=`Заблокирована: форма не может быть отправлена` &txtUnlock=`Разблокирована: форма может быть отправлена`]]
[[!Register?
    &preHooks=`validQaptcha`
    &submitVar=`registerbtn`     
    &activationResourceId=`4`
    &activationEmailTpl=`myActivationEmailTpl`
    &activationEmailSubject=`Thanks for Registering!`
    &submittedResourceId=`4`
    &usergroups=`Marketing,Research`
    &validate=`nospam:blank,
        username:required:minLength=^6^,
        password:required:minLength=^6^,
        password_confirm:password_confirm=^password^,
        fullname:required,
        email:required:email`
    &placeholderPrefix=`reg.`
]]
<div class="register">
    <div class="registerMessage">[[!+reg.error.message]]</div>
 
    <form class="form" action="[[~[[*id]]]]" method="post">
        <input type="hidden" name="nospam" value="[[!+reg.nospam]]" />
 
        <label for="username">[[%register.username? &namespace=`login` &topic=`register`]]
            <span class="error">[[!+reg.error.username]]</span>
        </label>
        <input type="text" name="username" id="username" value="[[!+reg.username]]" />
 
        <label for="password">[[%register.password]]
            <span class="error">[[!+reg.error.password]]</span>
        </label>
        <input type="password" name="password" id="password" value="[[!+reg.password]]" />
 
        <label for="password_confirm">[[%register.password_confirm]]
            <span class="error">[[!+reg.error.password_confirm]]</span>
        </label>
        <input type="password" name="password_confirm" id="password_confirm" value="[[!+reg.password_confirm]]" />
 
        <label for="fullname">[[%register.fullname]]
            <span class="error">[[!+reg.error.fullname]]</span>
        </label>
        <input type="text" name="fullname" id="fullname" value="[[!+reg.fullname]]" />
 
        <label for="email">[[%register.email]]
            <span class="error">[[!+reg.error.email]]</span>
        </label>
        <input type="text" name="email" id="email" value="[[!+reg.email]]" />
 
        <br class="clear" />
 
        <div class="form-buttons">
            [[+btQaptcha]]
            <input type="submit" name="registerbtn" value="Register" />
        </div>
    </form>
</div>
```

### Authors
<table>
  <tr>
    <td><img src="http://www.gravatar.com/avatar/39ef1c740deff70b054c1d9ae8f86d02?s=60"></td><td valign="middle">Valentin Rasulov<br>artdevue.com<br><a href="http://artdevue.com">http://artdevue.com</a></td>
  </tr>
</table>