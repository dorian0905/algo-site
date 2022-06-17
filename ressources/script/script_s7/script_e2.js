// start javascript
function fonction_javascript() {
    let array = [10, 8, 7, 51, 42, 85, 12, 9, 2, 97, 102, 25];
    let indexMaxValue = 0;
    let transfert = 0;
    if(document.getElementById("method").value == 'Selection') {
        for(let i = 0; i <= array.length - 2; i++) {
            indexMaxValue = i;
            for(let j = i + 1; j <= array.length - 1; j++) {
                if(array[j] > array[indexMaxValue]) {
                    indexMaxValue = j;
                }
            }
            transfert = array[i];
            array[i] = array[indexMaxValue];
            array[indexMaxValue] = transfert;
        }  
    } else if(document.getElementById("method").value == 'Bulle') {
        let flag = true;
        while(flag) {
            flag = false;
            for(let i = 0; i <= array.length - 2; i++) {
                if(array[i] < array[i+1]) {
                    transfert = array[i];
                    array[i] = array[i+1];
                    array[i+1] = transfert;
                    flag = true;
                } 
            }
        }
    }   
    return array;
}
// end javascript


// start jquery
function fonction_jquery() {
    let array = [10, 8, 7, 51, 42, 85, 12, 9, 2, 97, 102, 25];
    let indexMaxValue = 0;
    let transfert = 0;
    if($("#method").val() == 'Selection') {
        for(let i = 0; i <= array.length - 2; i++) {
            indexMaxValue = i;
            for(let j = i + 1; j <= array.length - 1; j++) {
                if(array[j] > array[indexMaxValue]) {
                    indexMaxValue = j;
                }
            }
            transfert = array[i];
            array[i] = array[indexMaxValue];
            array[indexMaxValue] = transfert;
        }  
    } else if($("#method").val() == 'Bulle') {
        let flag = true;
        while(flag) {
            flag = false;
            for(let i = 0; i <= array.length - 2; i++) {
                if(array[i] < array[i+1]) {
                    transfert = array[i];
                    array[i] = array[i+1];
                    array[i+1] = transfert;
                    flag = true;
                } 
            }
        }
    }   
    return array;
}
// end jquery