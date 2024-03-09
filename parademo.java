

class react 
{ 
	int l,w;
	boolean isfilled;
	
	react(int len, int wid, boolean isfilled1)
	{
		l=len;
		w=wid;
		isfilled=isfilled1;
		
	}
}
class parademo
{
	 public static void main(String args[])
	 {
		 react r=new react(10,20,true);
		 System.out.println("react is "+r.l);
	 }
	 
	
       
}
