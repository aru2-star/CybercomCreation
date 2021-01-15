var mark = {
      fullName: 'Mark',
      weight: 70,
      height: 1.55,
      calculateBmi: function() {
        this.bmi = this.weight / (this.height * this.height);
        return this.bmi;
      }
    }

    var john = {
      fullName: 'John',
      weight: 68,
      height: 1.57,
      calculateBmi: function() {
        this.bmi = this.weight / (this.height * this.height);
        return this.bmi;
      }
    }

    if (mark.calculateBmi() > john.calculateBmi()) {
  
      console.log(mark.fullName + ' has ' + mark.bmi + ' BMI' + ' ' + 'and ' + john.fullName + ' ' + 'has ' + john.bmi +' BMI.' +
       ' Hence, ' + mark.fullName + ' ' + 'BMI is higher than '  + john.fullName); 
  
    } else if (john.calculateBmi() > mark.calculateBmi()) {
  
      console.log(john.fullName + ' has ' + john.bmi + ' BMI' + ' ' + 'and ' + mark.fullName + ' ' + 'has ' + mark.bmi +' BMI.' +
       ' Hence, ' + john.fullName + ' ' + 'BMI is higher than '  + mark.fullName);
  
    } else {
      console.log(mark.fullName + ' and ' + john.fullName + ' have same BMI');
    }
