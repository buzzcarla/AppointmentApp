#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <string.h>
#include <time.h>

typedef char string[50];

typedef struct date{
	int month,days,year;
}date;

struct form{
	int registerNumber;
	string name,gender, motherName, fatherName;
	date birthday;
	string motherCitizenship, fatherCitizenship, userCitizenship;
	string province, city;
}form;

int fillup(void);
int pAge(void);
int leapYearFeb(int year, int mon);
int determineAge(date birthday);

int main(){
	char choice[3];
    int age;
    
    date birthday={12,3,1997};
     
    age = determineAge(birthday);
    

    printf("%d", age);
    getch();
	do{
		printf("Are you Registered?(yes/no): ");
		scanf("%s",&choice); fflush(stdin);
	system("cls");
	}
	
	while(strcmp(choice,"no")!=0);

		printf("Please fill-out the following:\n\n");
		
		printf("Name: "); gets(form.name); fflush(stdin);
		printf("Gender: "); gets(form.gender); fflush(stdin);
		printf("Citizenship: "); gets(form.userCitizenship); fflush(stdin);
		printf("Date of Birth(MM/DD/YYYY): "); scanf("%d/%d/%d",&form.birthday.month,&form.birthday.days,&form.birthday.year); fflush(stdin);
		printf("\nPlace of Birth\n");
		printf("City: "); gets(form.city); fflush(stdin);
		printf("Province: "); gets(form.province); fflush(stdin);
		
		printf("\nMother\n");
		printf("Maiden Name: "); gets(form.motherName); fflush(stdin);
		printf("Citizenship: "); gets(form.motherCitizenship); fflush(stdin);
		
		printf("\nFather\n");
		printf("Name: "); gets(form.fatherName); fflush(stdin);
		printf("Citizenship: "); gets(form.fatherCitizenship); fflush(stdin);
		
	system("cls"); 
			
		fillup();
	
		
	return 0;
}

int fillup(void){

		printf("Name: %s", form.name); fflush(stdin);
		printf("\nGender: %s", form.gender); fflush(stdin);
		printf("\nCitizenship: %s", form.userCitizenship); fflush(stdin);
		printf("\nDate of Birth %d/%d/%d",form.birthday.month,form.birthday.days,form.birthday.year); fflush(stdin);
		printf("\nPlace of Birth\n");
		printf("\nCity: %s", form.city); fflush(stdin);
		printf("\nProvince: %s", form.province); fflush(stdin);
		
		printf("\nMother\n");
		printf("\nMaiden Name: %s", form.motherName); fflush(stdin);
		printf("\nCitizenship: %s", form.motherCitizenship); fflush(stdin);
		
		printf("\nFather\n");
		printf("\nName: %s", form.fatherName); fflush(stdin);
		printf("\nCitizenship: %s", form.fatherCitizenship); fflush(stdin);
		
	return 0;	
}
int leapYearFeb(int year, int mon)
{
    int flag = 0;
    if (year % 100 == 0) 
    {
        if (year % 400 == 0) 
        {
            if (mon == 2) 
            {
                flag = 1;
            }
        }
    } 
    else if (year % 4 == 0) 
    {
        if (mon == 2) 
        {
            flag = 1;
        }
    }
    return (flag);
}
/*
int pAge(void)
{
    int daysInMon[] = {31, 28, 31, 30, 31, 30,31, 31, 30, 31, 30, 31};  
    char dob[100];
    time_t ts;
    struct tm *ct;
    
    
    ts = time(NULL);  
    ct = localtime(&ts);
    printf("\nCurrent Date: %d/%d/%d",tm_form.birthday.days, tm_form.birthday.mon + 1, tm_form.birthday.year + 1900);
    form.birthday.days = daysInMon[form.birthday.month - 1] - form.birthday.days + 1;
    if (leapYearFeb(form.birthday.year, form.birthday.month)) //Checking the given year Leap or not
    {
        form.birthday.days = form.birthday.days + 1;
    }
    
    /*Calculating the num of year, month and date*//*
    form.birthday.days = form.birthday.days + ct->tm_mday;
    form.birthday.month = (12 - form.birthday.month) + (tm_mon);
    form.birthday.year = (tm_form.birthday.year + 1900) - form.birthday.year - 1;
    if (leapYearFeb((tm_form.birthday.year + 1900), (tm_mon + 1))) 
    {
        if (form.birthday.days >= (daysInMon[ct->tm_mon] + 1)) 
        {
            form.birthday.days = form.birthday.days - (daysInMon[tm_mon] + 1);
            form.birthday.month = form.birthday.month + 1;
        }
    } 
    else if (form.birthday.days >= daysInMon[tm_mon]) 
    {
        form.birthday.days = form.birthday.days - (daysInMon[tm_mon]);
        form.birthday.month = form.birthday.month + 1;
    }
    if (form.birthday.month >= 12) 
    {
        form.birthday.year = form.birthday.year + 1;
        form.birthday.month = form.birthday.month - 12;
    }
    /*Result portion*/
    /*
    printf("\nAge: %d year %d months and %d days", form.birthday.year, form.birthday.month, form.birthday.days);
    return 0;
  }*/
  
int determineAge(date birthday)
{
    date currDate;
    int numDays; //days in the year
    int age;
    
    time_t ts;
    struct tm *ct;
    
    
    ts = time(NULL);  
    ct = localtime(&ts);
    
    currDate.month = ct->tm_mon + 1;                     // gets the current date
    currDate.year = ct->tm_year +1900;
    currDate.days = ct->tm_mday;
    
   

    
    age = -1;                                          //set age to -1 cuz when you are born you start with zero age
    
    while(birthday.year <= currDate.year){
         if(birthday.year != currDate.year){
             age++;
         } else {
             if(currDate.month >= birthday.month){
                  if(currDate.month == birthday.month && currDate.days >= birthday.days || currDate.month > birthday.month){
                        age++;
                  }
             }
         }
         
         birthday.year++; 
    }
    
    return age;
}

