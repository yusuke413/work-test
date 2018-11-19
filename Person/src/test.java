
public class test {

    public static void main(String[] args){

    	//インスタンス化

    	Person taro = new Person();

    	Person Jiro = new Person();

    	Person Hanako = new Person();

    	Robot aibo = new Robot();

    	Robot asimo = new Robot();

    	Robot pepper = new Robot();



    	taro.name = "山田太郎";

        taro.age = 20;

    	System.out.println("名前 "+taro.name);

    	System.out.println("年齢 "+taro.age+"歳");

    	taro.talk();

    	taro.walk();

    	taro.run();

    	System.out.println("\n");

    	Jiro.name = "木村次郎";

    	Jiro.age = 18;

    	Jiro.phoneNunber ="090-1111-2222";

    	Jiro.address = "abc@gmail.com";



    	Hanako.name ="鈴木花子";

    	Hanako.age = 16;

    	Hanako.phoneNunber = "080-2222-3333";

    	Hanako.address = "xyz@gmail.com";

    	//出力

    	System.out.println(Jiro.name);

    	System.out.println(Jiro.age);

    	System.out.println(Jiro.phoneNunber);

    	System.out.println(Jiro.address+"\n");

    	System.out.println(Hanako.name);

    	System.out.println(Hanako.age);

    	System.out.println(Hanako.phoneNunber);

    	System.out.println(Hanako.address+"\n");


    	aibo.name = "aibo";

    	//aiboを出力

    	aibo.talk();

    	aibo.walk();

    	aibo.run();

    	System.out.println("\n");

    	asimo.name = "asimo";

    	asimo.talk();

    	asimo.walk();

    	asimo.run();

    	System.out.println("\n");

    	pepper.name = "pepper";

    	pepper.talk();

    	pepper.walk();

    	pepper.run();

    }

}