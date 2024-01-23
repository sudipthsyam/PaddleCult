/* Design by Gal Shir https://dribbble.com/shots/2501344-Checkout-Interface */

(function() {
    var tabs = $('.tab');
    
    tabs.on('click', function(e) {
        var checkbox = $(this).parents('label').prev();
        
        // Fix for all tabs collapsing when click is within the area taken up by a button
        if (e.target.tagName === 'BUTTON') {
            $(checkbox).prop('checked', true);
        }
        
        // Don't collapse the currently open tab when clicked on
        if (checkbox.is(':checked')) {
            e.preventDefault();
        }
        
        // Allow only one tab to be open at a time
        checkbox.siblings('input:checkbox').prop('checked', false);
    });
})();

$(document).ready(function() {
    // On hover of a label
    $("label").hover(
        function() {
            // Get the id of the corresponding checkbox from the 'for' attribute of the label
            const checkboxId = $(this).attr('for');
            
            // Uncheck all checkboxes
            $("input[type='checkbox']").prop('checked', false);

            // Check the hovered label's corresponding checkbox
            $("#" + checkboxId).prop('checked', true);
        },
        function() {
            // This function runs when the mouse leaves the label, 
            // You can decide if you want to uncheck the checkbox or leave it checked
            // If you want to uncheck it, uncomment the following line
            // $("#" + $(this).attr('for')).prop('checked', false);
        }
    );
});

document.addEventListener('DOMContentLoaded', function() {
    let tabs = document.querySelectorAll('.tab:not(.payment)'); // Exclude the 'payment' tab from the selection

    tabs.forEach(tab => {
        tab.addEventListener('mouseenter', function() {
            this.style.height = "auto"; 
        });

        tab.addEventListener('mouseleave', function() {
            this.style.height = ""; // revert to the original value
        });
    });
});

// Opening the modal
document.querySelectorAll('.checkout-edit').forEach(editBtn => {
    editBtn.addEventListener('click', function(e) {
        if (e.target.closest('.checkout-item').querySelector('.checkout-label').textContent.trim() === "Dates") {
            document.getElementById('datesModal').style.transform = 'translateY(0%)';
        }
    });
});

// Closing the modal
document.getElementById('closeDatesModal').addEventListener('click', function() {
    document.getElementById('datesModal').style.transform = 'translateY(-100%)';
});

// Update function for the Dates
function updateDates() {
    const startDate = document.getElementById("startDate").value;
    const endDate = document.getElementById("endDate").value;
    document.querySelector('.checkout-data').textContent = startDate + " – " + endDate;
    document.getElementById('datesModal').style.transform = 'translateY(-100%)';
}
