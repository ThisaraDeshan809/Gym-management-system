if (document.querySelector("[choices-select]")) {
  var choices = document.querySelectorAll("[choices-select]");
  choices.forEach(choice => {
    const example = new Choices(choice);
  });
}

if (document.getElementById("choices-gender")) {
  var gender = document.getElementById("choices-gender");
  const example = new Choices(gender);
}

if (document.getElementById("choices-paymentChannel")) {
  var channel = document.getElementById("choices-paymentChannel");
  const example = new Choices(channel);
}

if (document.getElementById("choices-jobType")) {
  var jobType = document.getElementById("choices-jobType");

  // Options for the Choices instance
  const choicesOptions = {
    searchEnabled: false, // Disable search input
  };

  const example = new Choices(jobType , choicesOptions);
}

if (document.getElementById("choices-classes")) {
  var monClasses = document.getElementById("choices-classes");

  // Options for the Choices instance
  const choicesOptions = {
    searchEnabled: true, // Disable search input
  };

  const example = new Choices(monClasses , choicesOptions);
}

if (document.getElementById("choices-gender")) {
  var gender = document.getElementById("choices-gender");
  const example = new Choices(gender);
}

if (document.getElementById("choices-students")) {
  var students = document.getElementById("choices-students");
  const example = new Choices(students);
}

if (document.getElementById("choices-taxType")) {
  var taxType = document.getElementById("choices-taxType");

  // Options for the Choices instance
  const choicesOptions = {
    searchEnabled: false, // Disable search input
  };

  const example = new Choices(taxType , choicesOptions);
}

if (document.getElementById("choices-customer")) {
  var customer = document.getElementById("choices-customer");

  // Options for the Choices instance
  const choicesOptions = {
    searchEnabled: true, // Disable search input
  };

  const example = new Choices(customer, choicesOptions);
}

if (document.getElementById("choices-invoceType")) {
  var invoiceType = document.getElementById("choices-invoceType");

  const choicesOptions = {
    searchEnabled: false, 
  };

  const example = new Choices(invoiceType, choicesOptions);
}

if (document.getElementById("choices-status")) {
  var JobStatus = document.getElementById("choices-status");

  const choicesOptions = {
    searchEnabled: false, 
  };

  const example = new Choices(JobStatus, choicesOptions);
}

if (document.getElementById("choices-classStatus")) {
  var classStatus = document.getElementById("choices-classStatus");

  const choicesOptions = {
    searchEnabled: false, 
  };

  const example = new Choices(classStatus, choicesOptions);
}



if (document.getElementById("choices-language")) {
  var language = document.getElementById("choices-language");
  const example = new Choices(language);
}

if (document.getElementById("choices-skills")) {
  var skills = document.getElementById("choices-skills");
  const example = new Choices(skills, {
    delimiter: ",",
    editItems: true,
    maxItemCount: 5,
    removeItemButton: true,
    addItems: true,
  });
}

if (document.getElementById("choices-year")) {
  var year = document.getElementById("choices-year");
  setTimeout(function () {
    const example = new Choices(year);
  }, 1);

  for (y = 1900; y <= 2022; y++) {
    var optn = document.createElement("OPTION");
    optn.text = y;
    optn.value = y;

    if (y == 2022) {
      optn.selected = true;
    }

    year.options.add(optn);
  }
}

if (document.getElementById("choices-day")) {
  var day = document.getElementById("choices-day");
  setTimeout(function () {
    const example = new Choices(day);
  }, 1);

  for (y = 1; y <= 31; y++) {
    var optn = document.createElement("OPTION");
    optn.text = y;
    optn.value = y;

    if (y == 3) {
      optn.selected = true;
    }

    day.options.add(optn);
  }
}

if (document.getElementById("choices-month")) {
  var month = document.getElementById("choices-month");
  setTimeout(function () {
    const example = new Choices(month);
  }, 1);

  var d = new Date();
  var monthArray = new Array();
  monthArray[0] = "January";
  monthArray[1] = "February";
  monthArray[2] = "March";
  monthArray[3] = "April";
  monthArray[4] = "May";
  monthArray[5] = "June";
  monthArray[6] = "July";
  monthArray[7] = "August";
  monthArray[8] = "September";
  monthArray[9] = "October";
  monthArray[10] = "November";
  monthArray[11] = "December";
  for (m = 0; m <= 11; m++) {
    var optn = document.createElement("OPTION");
    optn.text = monthArray[m];
    // server side month start from one
    optn.value = m + 1;
    // if june selected
    if (m == 4) {
      optn.selected = true;
    }
    month.options.add(optn);
  }
}

if (document.getElementById("choices-questions")) {
  var element = document.getElementById("choices-questions");
  const example = new Choices(element);
}

if (document.getElementById("choices-multiple-remove-button")) {
  var choices = document.getElementById("choices-multiple-remove-button");
  const example = new Choices(choices, {
    delimiter: ",",
    editItems: true,
    maxItemCount: 5,
    removeItemButton: true,
    addItems: true,
  });
}

if (document.getElementById('choices-country')) {
  var country = document.getElementById('choices-country');
  const example = new Choices(country);
}

if (document.getElementById('choices-category')) {
  var element = document.getElementById('choices-category');
  const example = new Choices(element, {
    searchEnabled: false
  });
};

