<?php

/*
 *<#日期 = "2017-2-8">
 *<#时间 = "20:52:38">
 *<#人物 = "buff" >
 *<#备注 = 1.反射类API 常用功能
 *         2.每一行最后的\r\n\ ;\r\n是为留在console中输出换行,\是为了在js脚本中连接下一行字符串>
 */
$reflection_api_mes = '1：Reflection:\r\n\
    public static export(Reflector r [,bool return])//打印类或方法的详细信息\r\n\
    public static  getModifierNames(int modifiers)  //取得修饰符的名字\r\n\
2：ReflectionMethod：\r\n\
    public static string export()                       //打印该方法的信息\r\n\
    public mixed invoke(stdclass object, mixed* args)   //调用对应的方法\r\n\
    public mixed invokeArgs(stdclass object, array args)//调用对应的方法，传多参数\r\n\
    public bool isFinal()        //方法是否为final\r\n\
    public bool isAbstract()     //方法是否为abstract\r\n\
    public bool isPublic()       //方法是否为public\r\n\
    public bool isPrivate()      //方法是否为private\r\n\
    public bool isProtected()    //方法是否为protected\r\n\
    public bool isStatic()       //方法是否为static\r\n\
    public bool isConstructor()  //方法是否为构造函数\r\n\
3：ReflectionClass：\r\n\
    public static string export()  //打印类的详细信息\r\n\
    public string getName()        //取得类名或接口名\r\n\
    public bool isInternal()       //类是否为系统内部类\r\n\
    public bool isUserDefined()    //类是否为用户自定义类\r\n\
    public bool isInstantiable()   //类是否被实例化过\r\n\
    public bool hasMethod(string name)  //类是否有特定的方法\r\n\
    public bool hasProperty(string name)//类是否有特定的属性\r\n\
    public string getFileName()         //获取定义该类的文件名，包括路径名\r\n\
    public int getStartLine()           //获取定义该类的开始行\r\n\
    public int getEndLine()             //获取定义该类的结束行\r\n\
    public string getDocComment()       //获取该类的注释\r\n\
    public ReflectionMethod getConstructor()           //取得该类的构造函数信息\r\n\
    public ReflectionMethod getMethod(string name)     //取得该类的某个特定的方法信息\r\n\
    public ReflectionMethod[] getMethods()             //取得该类的所有的方法信息\r\n\
    public ReflectionProperty getProperty(string name) //取得某个特定的属性信息\r\n\
    public ReflectionProperty[] getProperties()        //取得该类的所有属性信息\r\n\
    public array getConstants()                        //取得该类所有常量信息\r\n\
    public mixed getConstant(string name)              //取得该类特定常量信息\r\n\
    public ReflectionClass[] getInterfaces()           //取得接口类信息\r\n\
    public bool isInterface()  //测试该类是否为接口\r\n\
    public bool isAbstract()   //测试该类是否为抽象类\r\n\
4：ReflectionParameter：\r\n\
    public static string export()     //导出该参数的详细信息\r\n\
    public string getName()           //取得参数名\r\n\
    public bool isPassedByReference() //测试该参数是否通过引用传递参数\r\n\
    public ReflectionClass getClass() //若该参数为对象，返回该对象的类名\r\n\
    public bool isArray()             //测试该参数是否为数组类型\r\n\
    public bool allowsNull()          //测试该参数是否允许为空\r\n\
    public bool isOptional()          //测试该参数是否为可选的，当有默认参数时可选\r\n\
    public bool isDefaultValueAvailable() //测试该参数是否为默认参数\r\n\
    public mixed getDefaultValue()        //取得该参数的默认值\r\n\
5：ReflectionExtension类\r\n\
    public static  export()    //导出该扩展的所有信息\r\n\
    public string getName()    //取得该扩展的名字\r\n\
    public string getVersion() //取得该扩展的版本\r\n\
    public ReflectionFunction[] getFunctions()   //取得该扩展的所有函数\r\n\
    public array getConstants()  //取得该扩展的所有常量\r\n\
    public array getINIEntries() //取得与该扩展相关的，在php.ini中的指令信息\r\n\
}\r\n\ ';
