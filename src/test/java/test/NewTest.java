package test;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.testng.Assert;
import org.testng.annotations.Test;
import java.io.File;

import io.github.bonigarcia.wdm.WebDriverManager;

public class NewTest {
  @Test
  public void f() throws InterruptedException {
	  WebDriverManager.chromedriver().setup();
		JavascriptExecutor js;
		// creating driver instance
		WebDriver driver = new ChromeDriver();
		int number = 0;
//		File s = ((TakesScreenshot)driver).getScreenshotAs(OutputType.FILE);
//	    FileUtils.copyFile(s, new File("tutorialpoint"+number+".png"));
		number++;
		// driver.get("https://www.instagram.com/");
		driver.get("https://matrimony-perfectmatch.000webhostapp.com/login.php");
		Thread.sleep(5000);
		

//		WebElement ele = driver.findElement(By.xpath("//*[text()='Sign up now']"));
//		ele.click();
//		Thread.sleep(5000);
//		WebElement name = driver.findElement(By.name("username"));
//		WebElement password = driver.findElement(By.name("password"));
//		WebElement confirm_password = driver.findElement(By.name("confirm_password"));
//		name.sendKeys("Tester");
//		password.sendKeys("123456@");
//		confirm_password.sendKeys("123456@");
//		Thread.sleep(5000);
//		WebElement submit = driver.findElement(By.xpath("/html/body/div[1]/form/div[4]/input[1]"));
		//submit.click();
		Thread.sleep(5000);
		WebElement name1 = driver.findElement(By.name("username"));
		WebElement password1 = driver.findElement(By.name("password"));
		WebElement login = driver.findElement(By.xpath("/html/body/div[1]/form/div[3]/input"));
		name1.sendKeys("Tester");
		password1.sendKeys("123456@");
		login.click();
// 		WebElement pricing = driver.findElement(By.xpath("//*[@id=\"navbarSupportedContent\"]/ul/li[2]/a"));
// 		pricing.click();
// 		Thread.sleep(5000);
// 		WebElement assertLabel = driver.findElement(By.xpath("//*[@id=\"pricing\"]/h2"));
// 		Assert.assertEquals("A Plan for Every Perfect Couple !", assertLabel.getText());
		WebElement subscribeFree = driver.findElement(By.xpath("//*[@id=\"pricing\"]/div/div[1]/div/div[2]/a"));
		js = (JavascriptExecutor) driver;
		js.executeScript("arguments[0].scrollIntoView(true);",subscribeFree);
		Thread.sleep(5000);
		subscribeFree.click();
		WebElement nameInSubscribe = driver.findElement(By.name("name"));
		WebElement bioInSubscribe = driver.findElement(By.name("bio"));
		WebElement interestsInSubscribe = driver.findElement(By.name("interests"));
		
		nameInSubscribe.sendKeys("hiesenberg");
		bioInSubscribe.sendKeys("teacher");
		interestsInSubscribe.sendKeys("Chemistry");
		Thread.sleep(5000);
		WebElement imageInSubscribe = driver.findElement(By.xpath("//*[@id=\"image\"]"));
		//js.executeScript("driver.findElement(By.xpath(\"//*[@id=\\\"image\\\"]\")).value="+path);
	  	String path = new File("images\\hiesenberg.jpg").getAbsolutePath();
		imageInSubscribe.sendKeys(path);
		Thread.sleep(5000);
		
		WebElement subscribeInBio = driver.findElement(By.xpath("/html/body/div[1]/form/div[5]/input[1]"));
		js.executeScript("arguments[0].scrollIntoView(true);",subscribeInBio);
		subscribeInBio.click();
		Alert al = driver.switchTo().alert();
	    // click on OK to accept with accept()
	    al.accept();
	    
// 	    WebElement profileBtn = driver.findElement(By.xpath("//*[@id=\"navbarSupportedContent\"]/ul/li[4]/a"));
// 	    profileBtn.click();	    
// 	    Thread.sleep(4000);
	   
		
		//WebElement  lastUploaded = driver.findElement(By.xpath("/html/body/form/font/font/font/font/font/section"));
		//js.executeScript("arguments[0].scrollIntoView(true);",lastUploaded);
		//WebElement profileName = driver.findElement(By.xpath("//*[@id=\"features1\"]/center[2]/font/text()[1]"));
		//Assert.assertEquals(profileName.getText(),"Name:hiesenberg");
		
		
		
		driver.quit();
  }
	@Test
public void test2() throws InterruptedException {
WebDriverManager.chromedriver().setup();
JavascriptExecutor js;
WebDriver driver = new ChromeDriver();
int number = 0;
number++;
// driver.get("https://www.instagram.com/");
driver.get("https://matrimony-perfectmatch.000webhostapp.com/login.php");
Thread.sleep(5000);
WebElement name1 = driver.findElement(By.name("username"));
WebElement password1 = driver.findElement(By.name("password"));
WebElement login = driver.findElement(By.xpath("/html/body/div[1]/form/div[3]/input"));
name1.sendKeys("Tester");
password1.sendKeys("123456@");
login.click();
driver.quit();

}
}

