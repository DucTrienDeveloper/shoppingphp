
// arr = [9,8,7,6,5,4,3,2,1,0]
// operation = [9,0],[4,5],[3,6],[2,7],[1,8],[0,9]

public static List<Integer> performOperations(List<Integer> arr, List<List<Integer>> operations) {
        // Check if the array and operations are not null
        if(arr == null || operations == null){
            System.out.println("Invalid");
            return null;   
        }
        // Loop through each operation and call the reverseSubarray method
        for (List<Integer> operation : operations ){
            int start = operation.get(0);
            int end = operation.get(1);
            reverseSubArray(arr,start, end);
        }
        // Return the modified arr
        return arr;
    }
    
    public static void reverseSubArray(List<Integer> arr,int start,int end){
       // check if the indices are valid
       if(start<0||end>=arr.size()||start>end ){
            return;  
       } 
       
       // Use Collections.reverse to reverse the subarray in place
       Collections.reverse(arr.subList(start, end+1));
    }