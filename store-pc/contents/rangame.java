import java.util.Scanner;
import java.util.Random;

public class rangame {
	public static void main(String args[]) {
		int userPick, upUserPick = 0, downUserPick = 99, number, i = 1;
		String text;
		Scanner scanner = new Scanner(System.in);
		Random random = new Random();

		number = random.nextInt(100);

		while (true) {
			System.out.println("수를 결정하였습니다. 맞추어보세요");
			while (true) {
				System.out.println(upUserPick + "~" + downUserPick);
				System.out.print(i + ">>");

				userPick = scanner.nextInt();

				if (userPick < number) {
					System.out.println(userPick + "보다 큽니다.");
					upUserPick = userPick;
					userPick = 0;
				} else if (number < userPick) {
					System.out.println(userPick + "보다 작습니다.");
					downUserPick = userPick;
					userPick = 0;
				}
				if (userPick == number) {
					System.out.println("성공하셨습니다!");
					break;
				}
				i++;
			}
			System.out.print("다시하시겠습니까?(y/n)>>");
			text = scanner.next();
			if (text.equals("n"))
				break;
			else if (text.equals("y")) {
				number = random.nextInt(100);
				upUserPick = 0;
				downUserPick = 99;
				i = 1;
			}
		}
	}
}
