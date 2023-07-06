// ceaser cipher

public class pr1{
    static String  ALPHABET = "abcdefghijklmnopqrstuvwxyz";
    
    public static String encrypt(String plainText,int enKey){
        String cipherText = "";
        for(int i = 0; i < plainText.length(); i++){
            plainText = plainText.toLowerCase();
            int index = ALPHABET.indexOf(plainText.charAt(i));
            int encryptedValueint = (index + enKey) % 26;
            cipherText += ALPHABET.charAt(encryptedValueint);
        }
            return cipherText;
    }

    public static String decrypt(String encryptedText,int enKey){
        String decryptedText = "";
        for(int i = 0; i < encryptedText.length(); i++){
            encryptedText = encryptedText.toLowerCase();
            int index = ALPHABET.indexOf(encryptedText.charAt(i));
            int decryptedValueint = (index - enKey) % 26;
            if(decryptedValueint < 0){
                decryptedValueint += 26;
            }
            decryptedText += ALPHABET.charAt(decryptedValueint);
        }
            return decryptedText;
    }

    public static void main(String[] args){
        String Ad = encrypt("information", 3);
        System.out.println(Ad);
        String AdJ = decrypt("lqirupdwlrq", 3);
        System.out.println(AdJ);
    }

}
