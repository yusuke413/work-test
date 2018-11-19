package capsule;

public class Person {//演習１

	private String name=null;//演習４　publicをprivateに変更

	private int age=0;

	public Person(String name,int age){

		this.name=name;

		this.age=age;

	}

	public String getName(){

	    return this.name;//getの後は必ずreturn

	}

	public void setName(String name){

		this.name=name;

	}

	public int getAge(){//演習５

	    return this.age;

	}

	public void setAge(int age){

		this.age=age;

	}

}
