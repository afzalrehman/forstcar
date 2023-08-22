/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});

// Body Length in Feet
// Get all checkboxes with class '...'
const checkboxes = document.querySelectorAll(".bodyFeetCheck");
// Add event listener to each checkbox
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Refrigeration
// Get all checkboxes with class '...'
const checkboxes1 = document.querySelectorAll(".refriCheck");
// Add event listener to each checkbox
checkboxes1.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes1.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Rear Door
// Get all checkboxes with class '...'
const checkboxes2 = document.querySelectorAll(".rearCheck");
// Add event listener to each checkbox
checkboxes2.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes2.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Side Door
// Get all checkboxes with class '...'
const checkboxes3 = document.querySelectorAll(".sideCheck");
// Add event listener to each checkbox
checkboxes3.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes3.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// E-Track (Tall Body Cargo Control)
// Get all checkboxes with class '...'
const checkboxes4 = document.querySelectorAll(".eTrackCheck");
// Add event listener to each checkbox
checkboxes4.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes4.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Floor
// Get all checkboxes with class '...'
const checkboxes5 = document.querySelectorAll(".floorCheck");
// Add event listener to each checkbox
checkboxes5.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes5.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Temperature
// Get all checkboxes with class '...'
const checkboxes6 = document.querySelectorAll(".temperaCheck");
// Add event listener to each checkbox
checkboxes6.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes6.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Accessories
// Get all checkboxes with class '...'
const checkboxes7 = document.querySelectorAll(".accessorCheck");
// Add event listener to each checkbox
checkboxes7.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes7.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});

// Fuel Type
// Get all checkboxes with class '...'
const checkboxes8 = document.querySelectorAll(".fuelCheck");
// Add event listener to each checkbox
checkboxes8.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    if (checkbox.checked) {
      // Uncheck other checkboxes
      checkboxes8.forEach((otherCheckbox) => {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    }
  });
});
