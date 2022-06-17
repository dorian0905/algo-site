// start javascript
function fonction_javascript() {
    const array2 = [1, 3, 5, 7, 9, 9, 10, 15];
    const array1 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22];
    let array3 = [];
    let index1 = 0;
    let index2 = 0;
    for(let index3 = 0; index3 < (array1.length + array2.length); index3++) {
        if (index2 > (array2.length - 1)) {
            array3[index3] = array1[index1];
            index1++;
        } else if (index1 > (array1.length - 1)) {
            array3[index3] = array2[index2];
            index1++;
        } else if(array1[index1] < array2[index2]) {
            array3[index3] = array1[index1];
            index1++;
        } else {
            array3[index3] = array2[index2];
            index2++;
        }
    }
    return array3;
}
// end javascript


// start jquery
function fonction_jquery() {
    const array2 = [1, 3, 5, 7, 9, 9, 10, 15];
    const array1 = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22];
    let array3 = [];
    let index1 = 0;
    let index2 = 0;
    for(let index3 = 0; index3 < (array1.length + array2.length); index3++) {
        if (index2 > (array2.length - 1)) {
            array3[index3] = array1[index1];
            index1++;
        } else if (index1 > (array1.length - 1)) {
            array3[index3] = array2[index2];
            index1++;
        } else if(array1[index1] < array2[index2]) {
            array3[index3] = array1[index1];
            index1++;
        } else {
            array3[index3] = array2[index2];
            index2++;
        }
    }
    return array3;
}
// end jquery