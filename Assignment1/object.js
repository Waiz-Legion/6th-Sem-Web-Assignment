//objects are non-primitive data  type used to store homogenous or heterogenous values in form of properties and methods!!!
//created in 2 ways - object literal and object constructor
//object literal - easy one
//syntax is var obj = {'key':'val'} or {'property':'propertyName', methodName: method()};
/*var person = {
    fname: 'waiz',
    lname: 'khan'
}
console.log(person.fname);
console.log(person.lname);

var person = {
    print : function(){
        val = 2;
        return val;
    }
}
console.log(person.print());

var person = {
    fname: 'waiz',
    lname: 'khan',
    getFull: function(){
        return this.fname + " " + this.lname;
    }
}
console.log(person.getFull());*/


/*var person = new Object();
person.fname = 'waiz';
person.lname = 'khan';
console.log(person.lname);
var person  = {
    firstname : 'waiz',
    lastname : 'khan',
    age: 23,
    full : function(){
        return this.firstname + " " + this.lastname + " " + this.age;
    }
}

var p2 = {
    fn : 'amaan',
    ln : 'adeen',
    person  : {
        firstname : 'waiz',
        lastname : 'khan',
        age: 23,
        full : function(){
            return this.firstname + " " + this.lastname + " " + this.age;
        }
    }
}
console.log(p2.fn);
console.log(p2.ln);
console.log(person.age);*/

var window = {
    innerHeight: '',
    outerHeight: '',
    document: {
        getelembyid : function(){
            return "accessed";
        }
    }
}
console.log(document.getelembyid());